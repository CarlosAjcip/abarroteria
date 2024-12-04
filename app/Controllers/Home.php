<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('plantilla/header');
        echo view('tables');
        echo view('plantilla/footer');
    }
}
