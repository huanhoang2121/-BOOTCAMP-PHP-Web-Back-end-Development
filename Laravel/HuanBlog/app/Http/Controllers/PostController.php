<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(4);
        $categories = Category::all();
        return view('blog.index', compact('posts', 'categories'));
    }

    public function getPost($id)
    {
        $post = Post::find($id)->toArray();
        $categories = Category::all();
        return view('blog.post', compact('post', 'categories'));
    }

    public function getAdminIndex()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        $categories = Category::all();
        return view('admin.posts.index', compact('posts', 'categories'));
    }

    public function getAdminCreate()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    public function postAdminCreate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->category_id  = $request->input('category_id');


        $post_content = $request->input('content');
        $dom = new \DomDocument();
        $dom->loadHtml($post_content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= "/storage/images/" . time().$k.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $content = $dom->saveHTML();
        $post->content = $content;


        //upload file
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $post->image = $path;
        }
        else{
            $post->image ="";
        }

        $post->add_date = date('Y-m-d H:i:s');
        $post->save();
        return redirect()->route('admin.posts.index')->with('info', 'Post created, new Title is: ' . $request->input('title'));
}

    public function getAdminEdit($id)
    {
        $post = Post::find($id)->toArray();
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function postAdminUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        $post = Post::find($request->id);
        $post->title = $request->input('title');
        $post->category_id  = $request->input('category_id');

        $post_content = $request->input('content');
        $dom = new \DomDocument();
        $dom->loadHtml($post_content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= "/storage/images/" . time().$k.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $content = $dom->saveHTML();
        $post->content = $content;

        if ($request->hasFile('image')) {

            //xoa anh cu neu co
            $currentImg = $post->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            // cap nhat anh moi
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $post->image = $path;
        }
        echo "Lỗi";

        $post->save();
        return redirect()->route('admin.posts.index')->with('info', 'Post edited, new Title is: ' . $request->input('title'));
    }

    public function getAdminDelete($id)
    {
        $post = Post::find($id)->delete();
        return redirect()->route('admin.posts.index')->with('info', 'Post delete success');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('blog.index');
        }
        $posts = Post::where('title', 'LIKE', '%' . $keyword . '%')->paginate(5);
        $categories = Category::all();
        return view('blog.index', compact('posts', 'categories'));
    }
}
