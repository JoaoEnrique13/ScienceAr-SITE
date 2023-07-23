<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index(){
        return view('index');
    }

    public function page_not_found(){
        return view('errors.404');
    }

    public function augmented_reality(){
        return view('augmented_reality');
    }

    // Meterial de temperatura
    public function temperature(){
        return view('temperature');
    }

    public function about(){
        return view('about');
    }

    public function register(){
        return view('user.register');
    }

    public function login(){
        return view('user.login');
    }

    public function create_quiz(){
        return view('admin.create_quiz');
    }

    public function account(){
        return view('user.account');
    }
}
