<?php

namespace App\Http\Controllers;

class IndexController extends Controller {

    public function showIndex() {
        $array = [
            'title' => 'index'
        ];
        return view('index', compact('array'));
    }

}

