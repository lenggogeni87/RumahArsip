<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function login(): string
    {
        $content = view('home/login');
        return $content;
    }

    public function regis(): string
    {
        $content = view('home/register');
        return $content;
    }

    public function index(): string
    {
        #return view('dash');
        
        $header = view('layout/header');
        $content = view('home/dash');
        $footer = view('layout/footer');
        
        return $header. $content . $footer;
    }
}
