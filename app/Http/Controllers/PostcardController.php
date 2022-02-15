<?php

namespace App\Http\Controllers;

use App\Postcard;
use Illuminate\Http\Request;

class PostcardController extends Controller
{
    public function home() {

        return view('pages.home');
    }

    // Api get all postcards
    public function getPostcards() {

        $postcards = Postcard::all();

        return json_encode($postcards);
    }
}
