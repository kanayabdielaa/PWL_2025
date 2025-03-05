<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PageController extends Controller
{
    public function index(): string
    {
        return 'Selamat Datang';
    }

    public function about(): string
    {
        return 'Kanaya Abdiela (2341760118)';
    }

    public function articles($id = null): string
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}