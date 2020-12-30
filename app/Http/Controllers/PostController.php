<?php

namespace App\Http\Controllers;

use Wink\WinkTag;
use Wink\WinkPost;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $winkPosts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->get();

        return view('posts.index', compact('winkPosts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $winkPost = WinkPost::where('slug', $slug)
            ->live()
            ->firstOrFail();

        return view('posts.show', compact('winkPost'))->with('author');
    }
}
