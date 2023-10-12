<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index($par1,$par2){
        return view ('khs',['kode'=>$par1],['kode2'=>$par2]);
    }
}
