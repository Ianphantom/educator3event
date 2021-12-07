<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccountModel;
use App\Models\BankModel;

class DashboardCtl extends BaseController
{
    public function profile()
    {
        $AccountModel = new AccountModel();
        $bankModel = new BankModel();
        $id = session()->get('loggedUser');
        $dashboard = $AccountModel->getUserData($id);
        $bank = $bankModel->findAll();
        $data = [
            'data' => $dashboard,
            'banks' => $bank,
            'validation' => \Config\Services::validation()
        ];
        return view('dashboard/profile', $data);
    }

    public function password()
    {
        $AccountModel = new AccountModel();
        $id = session()->get('loggedUser');
        $dashboard = $AccountModel->where('id', session()->get('loggedUser'))->first();
        $data = [
            'dashboard' => $dashboard,
        ];
        return view('dashboard/changepwd', $data);
    }
}
