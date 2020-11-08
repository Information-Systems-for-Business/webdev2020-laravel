<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwalController extends Controller
{
    public function index(){
        echo "Halo Kamu ngakses Controller Awal pada function index";
        return view('form');
    }

    public function tangkap(Request $req){
        echo $req->input('nama_user');
        echo "<br>";
        echo $req->input('alamat_surat');
    }
}