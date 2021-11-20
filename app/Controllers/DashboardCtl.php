<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccountModel;

class DashboardCtl extends BaseController
{
    public function profile()
    {
        $AccountModel = new AccountModel();
        // $dashboard = $AccountModel->where('id', session()->get('loggedUser'));
        // $dashboard = $AccountModel->getWhere(['id' => session()->get('loggedUser')]) -> getResult();
        $dashboard = $AccountModel->getUserData(3);
        // foreach($dashboard as $dash){
        //     echo $dash->nama_lengkap;
        // }
        $data = [
            'data' => $dashboard
        ];
        return view('dashboard/profile', $data);
    }
}