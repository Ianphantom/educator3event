<?php

namespace App\Controllers;

use App\Models\EventModel;

class Home extends BaseController
{
    public function index()
    {
        $eventModel = new EventModel();
        $event = $eventModel->findAll();

        $data = [
            'event' => $event
        ];

        return view('index', $data);
    }
}
