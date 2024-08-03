<?php

namespace App\Modules\Auth\Controllers;

use App\Modules\Auth\Models\Auth_model;

class Auth extends \App\Controllers\BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Auth_model();
    }

    public function index()
    {
        $data = [];
        return view('\App\Modules\Auth\Views\index', $data);
    }

    public function signUp()
    {
        $data = [];
        return view('\App\Modules\Auth\Views\signup',$data);
    }
    
    public function signUpPost()
    {

        $data = [
            "username" => $this->request->getVar('username'),
            "full_name" => $this->request->getVar('name'),
            "email" => $this->request->getVar('email'),
            "password" => password_hash($this->request->getVar('password'),PASSWORD_BCRYPT),
        ];

        $queryStatus = $this->model->insertRegisterUser($data);
        if($queryStatus["ok"]){
            $url = base_url('auth/');
            session()->setFlashdata('success_alert', 'Berhasl mendaftar!');
        }
        else{
            $url = base_url('auth/sign_up');
            $msg = "Terjadi kesalahan. Tidak dapat mendaftar";
            if($queryStatus["err"]["code"] == 1062){ //error duplicate entry
                $msg = "Username telah terpakai";
            }
            session()->setFlashdata('error_alert', $msg);
        }
        return redirect()->to($url)->withInput();
    }

    public function signInSubmit()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $this->model->getUserExist($username);
        if ($user != '') {
            if (password_verify($password, ($user->password ?? ''))) {
                $this->_createSession($user);

                return redirect()->to(base_url('dashboard'));
            }
        }
        session()->setFlashdata('error_alert', 'Username/password salah');
        return redirect()->to(base_url('auth'))->withInput();
    }

    private function _createSession($user)
    {
        return session()->set([
            'user_id' => $user->user_id,
            'user_role' => $user->roles,
            'username' => $user->username,
            'full_name' => $user->full_name,
        ]);
    }

    public function signOut()
    {
        session()->destroy();

        return redirect()->to(base_url('auth'));
    }
}
