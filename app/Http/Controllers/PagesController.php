<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('aplikasi/index');
    }
    public function information(){
        return view('aplikasi/information');
    }
    public function news(){
        return view('aplikasi/news');
    }
    public function login(){
        return view('aplikasi/login');
    }
    public function admin(){
        return view('aplikasi/admin');
    }
}
