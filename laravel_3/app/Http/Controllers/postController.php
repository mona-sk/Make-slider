<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{



    public function index()
    {
        $post = Post::where('active','1')->get();
        return view('post.index', ['post' => $post]);
    }
    public function create()
    {
        return view('post/create');
    }


    public function store(Request $request)
    {
        $post = new post();
        $post->title = $request->title;

        $post->description = $request->description;
        $post->active = $request->active;
        $file = $request->file('image');
        if (!empty($file))
        {
            $image=time().$file->getClientOriginalName();
            $file->move('images/post',$image);
            $post->image = $image;
        }
        $post->save();
        return redirect()->route('post.index');
    }


    public function show(Post $post)
    {

        return view('post.show', ['post' => $post]);
    }


    public function edit(Post $post)
    {

        return view('post/edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
          $post = Post::findOrFail($id);
          $post->title = $request->title;
          $post->description = $request->description;
        $post->active = $request->active;
          $file = $request->file('image');
          if (!empty($file))
          {

              $imageDelete=$post->image;
              unlink('images/post/'.$imageDelete);
              $image=time().$file->getClientOriginalName();
              $file->move('images/post',$image);
              $post->image = $image;
          }
          $post->save();
        return redirect()->route('post.index');
    }


    public function destroy(post $post)
    {
        $imageDelete=$post->image;
        unlink('images/post'.$imageDelete);
$post->delete();
return back();
    }
}
