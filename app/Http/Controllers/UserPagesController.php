<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPagesController extends Controller
{
    public function index(){
        return view('users.index');
    }

    public function about(){
        return view('users.about');
    }

    public function course(){
        return view('users.courses');
    }

    public function gallery(){
        return view('users.gallery');
    }

    public function placements(){
        return view('users.placements');
    }

    public function contact(){
        return view('users.contact');
    }

    public function verifyCertificate(){
        return view('users.verifyCertificate');
    }
}
