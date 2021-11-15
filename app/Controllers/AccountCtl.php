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
            'institusi'     => $this->request->getVar('instutusi'),
            'whatsapp'      => $this->request->getVar('number'),
            'bank_id'       => $this->request->getVar('namaBank'),
            'bank_nomor'    => $this->request->getVar('norek'),
            'bank_nama'     => $this->request->getVar('namarek'),
        ];
        $accountModel = new AccountModel();
        $registering = $accountModel->save($inputData);
        return redirect()->to(base_url('/login?msg=Pendaftaran%20akun%20berhasil'));
    }
}
