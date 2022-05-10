<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Ke halaman utama
     */
    public function index(){
        return view('index');
    }
}
