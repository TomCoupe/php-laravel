<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function home() {

        return view('welcome', [
            'tasks' => 'task'
        ]);
    }
    public function about(){
        return view('about');
    }
    public function contact() {
        return view('contact');
    }
    public function help(){
        return view('help');
    }

}
