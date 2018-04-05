<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function announcement(){
        return view('pages.announcement');
    }

    public function internship(){
        return view('pages.internship');
    }

    public function news(){
        return view('pages.news');
    }

    public function activities(){
        return view('pages.activities');
    }
}
