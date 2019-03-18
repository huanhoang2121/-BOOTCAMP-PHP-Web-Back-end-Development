<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Like;
use Auth;

class CommentController extends Controller
{
    public function postComment($idPost, Request $request){
        $comment = new Comment;
        $comment->post_id = $idPost;
//        $comment->comment_id = $idComment;
        $comment->user_id = Auth::user()->id;
        $comment->content = $request->content;
        $comment->save();
        return redirect()->back();
    }

    public function deletePostComment($id, Request $request){
        $comment = Comment::find($id)->delete();
        return redirect()->back();
    }





    public function postLikePost(Request $request)
    {
        $post_id = $request['postId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $post = Post::find($post_id);
        if (!$post) {
            return null;
        }
        $user = Auth::user();
        $like = $user->likes()->where('post_id', $post_id)->first();
        if ($like) {
            $already_like = $like->like;
            $update = true;
            if ($already_like == $is_like) {
                $like->delete();
                return null;
            }
        } else {
            $like = new Like();
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->post_id = $post->id;
        if ($update) {
            $like->update();
        } else {
            $like->save();
        }
        return null;
    }
}
