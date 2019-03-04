<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function getIndex()
    {
        $post = new Post();
        $posts = $post::all();
        return view('blog.index', ['posts' => $posts]);
    }

    public function getPost($id)
    {
        $post = Post::find($id)->toArray();
        return view('blog.post', ['post' => $post]);
    }

    public function getAdminIndex()
    {
        $post = new Post();
        $posts = $post::all();
        return view('admin.index', ['posts' => $posts]);
    }

    public function getAdminCreate()
    {
        return view('admin.create');
    }

    public function postAdminCreate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'image' => 'required|min:5'
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->image = $request->input('image');
        $post->add_date = date('Y-m-d H:i:s');
        $post->save();
        return redirect()->route('admin.index')->with('info', 'Post created, new Title is: ' . $request->input('title'));
}

    public function getAdminEdit($id)
    {
        $post = Post::find($id)->toArray();
        return view('admin.edit', ['post' => $post]);
    }

    public function postAdminUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'image' => 'required|min:5'
        ]);
        $post = Post::find($request->id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->image = $request->input('image');
        $post->save();
        return redirect()->route('admin.index')->with('info', 'Post edited, new Title is: ' . $request->input('title'));
    }

    public function getAdminDelete($id)
    {
        $post = Post::find($id)->delete();
        return redirect()->route('admin.index')->with('info', 'Post delete success');
    }

}
