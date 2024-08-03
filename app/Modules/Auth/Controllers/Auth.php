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
