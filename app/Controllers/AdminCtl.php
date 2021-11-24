<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AdminCtl extends BaseController
{
    public function index()
    {
        return view('Panel/index');
    }

    public function loggingAccount()
    {
        // password = inimerupakanakunadmin
        $userModel = new AdminModel();
        $user = $userModel->where("username", $this->request->getVar('username'))->first();
        if(!$user){ 
            session()->setFlashdata('fail', 'email atau password salah');
            return redirect()->to(base_url('panel'))->withInput();
        }
        $verify = password_verify($this->request->getVar('password'), $user['password']);
        if(!$verify){
            session()->setFlashdata('fail', 'email atau password salah');
            return redirect()->to(base_url('panel'))->withInput();
        }

        $user_id = $user['id'];
        session()->set('loggedUser', $user_id);
        return redirect()->to(base_url('panel/event'));
    }

    public function event()
    {
        return view('Panel/event/index');
    }
}
