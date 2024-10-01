<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function doctors()
    {
        return view('user.doctors');
    }

    public function home()
    {
        return view('user.index');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function blog()
    {
        return view('user.blog');
    }

    public function service()
    {
        return view('user.service');
    }

    public function about()
    {
        return view('user.about');
    }

    public function login()
    {
        return view('user.login');
    }
}
