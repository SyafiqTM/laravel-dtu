<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = Comment::all();
        return response()->json($comment);
    }

    public function store(Request $request)
    {
        $comment = new Comment;

        $comment->user_id = request('user_id');
        $comment->name = request('name');
        $comment->text = request('text');
        $comment->slug = request('slug');
        // dd(request()); exit;
        $newComment = $comment->save();

        return response()->json($newComment);
    }

    public function show(Comment $comment)
    {
        return response()->json($comment);
    }

    public function update(Request $request, Comment $comment)
    {

        // $comment->user_id = $request['user_id'] ? $request['user_id'] : $comment->user_id;
        // $comment->name = $request['name'];
        // $comment->text = $request['text'];
        // $comment->slug = $request['slug'];
        // $comment->save();

        $comment->update($request->all());

        return response()->json($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return response()->json($comment::all());
    }
}
