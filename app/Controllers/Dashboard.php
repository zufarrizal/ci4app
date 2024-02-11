<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('dashboard');
        echo view('layout/footer');
    }
}
