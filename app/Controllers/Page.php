<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function hello_world(): string
    {
        return view('hello_world');
    }

    public function about(): string
    {
        return view('about');
    }

    public function contact(): string
    {
        return view('contact');
    }
}
