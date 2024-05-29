<?php

namespace App\Controllers;

use App\Models\BioModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new BioModel();
        $data['about'] = $model->first();
        return view('index', $data);
    }
}
