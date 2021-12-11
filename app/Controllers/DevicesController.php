<?php

namespace App\Controllers;

use App\Models\deviceModel;

class DevicesController extends BaseController
{
    public function index()
    {
        $deviceModel = new deviceModel();
        $device = $deviceModel->findAll();

        $data = [
            'device' => $device
        ];



        return view('Devices_Page', $data);
    }
}
