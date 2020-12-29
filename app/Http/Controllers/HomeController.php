<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $winkPosts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->paginate(6);

        return view('index', compact('winkPosts'));
    }
}
