<?php

namespace App\Modules\Profile\Controllers;

use App\Modules\Profile\Models\Profile_model;

class Profile extends \App\Controllers\BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Profile_model();
    }

    public function index()
    {
        $data = [
            'biodata' => $this->model->getBiodata(session()->get('username')),
            'history' => $this->model->getHistory(),
        ];
        return view('\App\Modules\Profile\Views\index', $data);
    }

    public function editImage()
    {

        $validationRule = [
            'img' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[img]',
                    'is_image[img]',
                    'mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                ],
            ],
        ];

        $validated = $this->validate($validationRule);
        
        if ($validated) {
            $image = $this->request->getFile('img');
            $filename = $image->getRandomName();
            $image->move(ROOTPATH . 'public/img/avatar', $filename);

            $data = [
                'username' => session()->get('username'),
                'img_name' => $filename,
            ];

            $update = $this->model->updateImage($data);
            if ($update['ok']) {
                echo json_encode(['info' => 'Gambar berhasil diubah', 'typeInfo' => 'badge badge-success', 'imgData' => base_url('img/avatar/'.$filename)]);
            } else {
                echo json_encode(['err' => 'Gagal update profil', 'typeInfo' => 'badge badge-danger', 'etc' => $update['err']]);
            }
        }
        else{
            echo json_encode(['err' => 'Masukkan gambar!', 'typeInfo' => 'badge badge-danger','is_validate'=> $validated,'etc' => $this->request->getFile('img')]);
        }

        
    }
    public function editIdentity(){
        $data = [
            "full_name" => $this->request->getPost('full_name'),
            "email" => $this->request->getPost('email'),
            "birth" => $this->request->getPost('birth'),
            "gender" => $this->request->getPost('gender'),
        ];

        $update = $this->model->updateIdentity($data,session()->get('username'));
        if($update["ok"]){
            echo json_encode(['edit_success' => '<span class="badge badge-success mb-2">Data berhasil diubah</span>', 'etc' => $data]);
        } else{
            echo json_encode(['err' => 'Gagal update profil', 'typeInfo' => 'badge badge-danger', 'etc' => $update['err']]);
        }

        
    }
}
