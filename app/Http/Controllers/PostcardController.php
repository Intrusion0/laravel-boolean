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

        $postcards = Postcard::OrderByDesc('id')->get();

        return json_encode($postcards);
    }

    // Create a new postcard
    public function createPostcard() {

        return view('pages.create-postcard');
    }

    // Store postcard
    public function storePostcard(Request $request) {

        $data = $request->validate([
            'sender' => 'required|string',
            'address' => 'required|string',
            'text' => 'required|string',
            'image' => 'required|image',
        ]);

        $imageFile = $data['image'];
        $imageName = rand(100000, 999999) . '_' . time() . '.' . $imageFile->getClientOriginalExtension();

        $imageFile->storeAs('/postcards/', $imageName, 'public');
        $data['image'] = $imageName;

        $postcard = Postcard::create($data);

        return redirect()->route('home');
    }
}
