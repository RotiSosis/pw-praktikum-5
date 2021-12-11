<?php

namespace App\Controllers;

use App\Models\devicdetailModel;

class DevicesDetailController extends BaseController
{
    public function index()
    {

        $devicdetailModel = new devicdetailModel();
        $devicdetail = $devicdetailModel->findAll();

        $data = [
            'devicdetail' => $devicdetail
        ];

        return view('DevicesDetail_Page', $data);
    }
}
