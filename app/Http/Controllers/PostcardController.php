<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostcardController extends Controller
{
    public function home() {

        return view('pages.home');
    }
}
