<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DashboardModel;

class DashboardCtl extends BaseController
{
    public function profile()
    {
        $dashboardModel = new DashboardModel();
        $dashboard = $dashboardModel->findAll();

        $data = [
            'dashboard' => $dashboard
        ];

        return view('dashboard/profile', $data);
    }
}
