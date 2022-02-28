<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        echo 'Selamat Datang';
    }

    public function about($id = 2041720249, $name = 'Vinka Kharisma Adzania', $class = 'TI - 2D') {
        echo 'NIM : ' . $id . '<br>Nama : ' . $name . '<br>Kelas : ' . $class;
    }

    public function articles($id) {
        echo 'Halaman Artikel dengan ID ' . $id;
    }

}
