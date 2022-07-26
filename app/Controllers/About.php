<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        echo view('views_user/about');
    }
}
