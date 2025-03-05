<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function hello(): string
    {
        return "Hello World";
    }

    public function greeting(): View
    {
        return view('blog.hello')
            ->with('name', 'Kanaya')
            ->with('occupation', 'Astronaut');
    }
}