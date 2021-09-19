<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function sarana_kantor(){
        return view ('sarana perkantoran');
    }
    public function sarana_lab(){
        return view ('sarana laboratorium');
    }
    public function sarana_kelas(){
        return view ('sarana kelas');
    }
    public function sarana_ruangtu(){
        return view ('sarana Ruang TU');
    }
}