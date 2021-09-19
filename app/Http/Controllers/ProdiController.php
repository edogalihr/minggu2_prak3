<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function mi_page(){
        return view ('Prodi MI');
    }
    public function ti_page(){
        return view ('Prodi TI');
    }
}