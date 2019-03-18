<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\User;
use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
        $viewposts = Post::orderBy('view', 'desc');
        $categories = Category::all();
        view()->share('viewposts', $viewposts);
        view()->share('categories', $categories);

    }

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('other.about');
    }

    public function contact()
    {
        return view('other.contact');
    }

    public function getIndex()
    {
        $newposts = Post::orderBy('id', 'desc')->paginate(2);
        return view('index', compact('newposts'));
    }

    public function getPostDetail($id)
    {
        $post = Post::find($id);
        $comments = Comment::where('post_id', $id)->orderBy('id', 'desc')->take(10)->get();
        return view('post-detail', compact('post', 'comments'));
    }

    public function getPostCategory($id)
    {
        $category = Category::find($id);
        return view('post-category', compact('category'));
    }

    public function getPostUser($id)
    {
        $user = User::find($id);
        return view('post-user', compact('user'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('index');
        }
        $newposts = Post::where('title', 'LIKE', '%' . $keyword . '%')->paginate(5);
        return view('index', compact('newposts'));
    }
}
