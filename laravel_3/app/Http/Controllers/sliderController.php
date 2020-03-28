<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class sliderController extends Controller
{

    public function index()
    {
        $post = Post::all();
        return view('slider.index', ['post' => $post]);

    }


    public function create()
    {
        return view('slider/create');
    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        return view('slider/edit');
    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
