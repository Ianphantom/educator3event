<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccountModel;
use App\Models\BankModel;

class AccountCtl extends BaseController
{
    
    public function login()
    {
        return view('login/login');
    }

    public function loggingAccount()
    {
        $userModel = new AccountModel();
        $user = $userModel->where("username", $this->request->getVar('username'))->first();
        if(!$user){ 
            session()->setFlashdata('fail', 'email atau password salah');
            return redirect()->to(base_url('login'))->withInput();
        }
        $verify = password_verify($this->request->getVar('password'), $user['password']);
        if(!$verify){
            session()->setFlashdata('fail', 'email atau password salah');
            return redirect()->to(base_url('login'))->withInput();
        }

        $user_id = $user['id'];
        session()->set('loggedUser', $user_id);
        return redirect()->to(base_url('dashboard/profile'));
    }

    public function logout(){
        if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            session()->destroy();
            return redirect()->to(base_url('login'));
        }
    }

    public function register()
    {
        $bankModel = new BankModel();
        $bank = $bankModel->findAll();
        $data = [
            'banks' => $bank,
            'error' => '',
        ];
        return view('login/regitration/regist', $data);
    }

    public function registeringAccount()
    {
        helper(['form']);
        $rules = [
            'username' => 'is_unique[akun.username]|min_length[3]',
            'password' => 'min_length[3]',
        ];
        $bankModel = new BankModel();
        $bank = $bankModel->findAll();
        
        if(!$this-> validate($rules)){
            $error = $this->validator->getErrors();
            $data = [
                'banks' => $bank,
                'error' => $error,
            ];
            return view('login/regitration/regist', $data);
        }
        $inputData = [
            'username'      => $this->request->getVar('username'),
            'password'      => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'nama_lengkap'  => $this->request->getVar('name'),
            'tgl_lahir'     => $this->request->getVar('tanggal'),
            'institusi'     => $this->request->getVar('institusi'),
            'whatsapp'      => $this->request->getVar('phone'),
            'bank_id'       => $this->request->getVar('namaBank'),
            'bank_nomor'    => $this->request->getVar('norek'),
            'bank_nama'     => $this->request->getVar('namerek'),
        ];
        $accountModel = new AccountModel();
        $registering = $accountModel->save($inputData);
        return redirect()->to(base_url('/login'))->with('success', 'Pendaftaran akun berhasil');
    }

    public function updatingAccount()
    {
        $userModel = new AccountModel();
        $user = $userModel->where("id", session()->get('loggedUser'))->first();
        $inputData = [
            'username'      => $this->request->getVar('username'),
            'password'      => $user['password'],
            'nama_lengkap'  => $this->request->getVar('name'),
            'tgl_lahir'     => $this->request->getVar('tanggal'),
            'institusi'     => $this->request->getVar('institusi'),
            'whatsapp'      => $this->request->getVar('phone'),
            'bank_id'       => $this->request->getVar('namaBank'),
            'bank_nomor'    => $this->request->getVar('norek'),
            'bank_nama'     => $this->request->getVar('namerek'),
        ];
        $accountModel = new AccountModel();
        $updating = $accountModel->update(session()->get('loggedUser'),$inputData);
        return redirect()->to(base_url('dashboard/profile'));
    }
}
