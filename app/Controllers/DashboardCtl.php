<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardCtl extends BaseController
{
    public function profile()
    {
        return view('dashboard/profile');
    }
}
