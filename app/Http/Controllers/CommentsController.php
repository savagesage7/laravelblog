<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function store(Post $post, CommentsRequest $request): RedirectResponse
    {
         $data = $request->validated();
         $comment = new Comment();

         $comment->post_id = $post->id;
         $comment->author = $data['author'];
         $comment->text = $data['text'];
         $comment->save();

         return back();
         
    }
}
