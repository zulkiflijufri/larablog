<?php

namespace App\Http\Controllers;

use Wink\WinkTag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(WinkTag $winkTag)
    {
        return view('tags.index', compact('winkTag'));
    }
}
