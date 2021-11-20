<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccountModel;

class DashboardCtl extends BaseController
{
    public function profile()
    {
        $dashboardModel = new AccountModel();
        $dashboard = $dashboardModel->where('id', session()->get('loggedUser'))->first();

        $data = [
            'dashboard' => $dashboard
        ];

        return view('dashboard/profile', $data);
    }
}
