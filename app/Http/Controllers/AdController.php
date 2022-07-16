<?php

namespace App\Http\Controllers;

class AdController extends Controller {

    public function createAd() {
        $array = [];
        return view('create-ad', compact('array'));
    }

}

// use Illuminate\Http\Request;

