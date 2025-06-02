<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function index(): string
    {
        return view('landing/home');
    }

    public function about()
    {
        return view('landing/about', ['title' => 'About Us']);
    }
}
