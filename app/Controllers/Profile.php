<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Profile extends BaseController
{
    public function index()
    {
        $model = new ProfileModel();
        $data['users'] = $model->findAll();
        echo view('layout/header');
        echo view('profile/profile', $data);
        echo view('layout/footer');
    }
}
