<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo view('common/header');
        return view('home');
    }
    public function login() {
        echo "i am test";
    }
}
