<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about($id = 2041720249, $name = 'Vinka Kharisma Adzania', $class = 'TI - 2D') {
        echo 'NIM : ' . $id . '<br>Nama : ' . $name . '<br>Kelas : ' . $class;
    }
}
