<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index_comment()
    {
        $comments = Comment::with([
            'room' => function ($query) {
                $query->select(['id', 'name']);
            },
            'user' => function ($query) {
                $query->select(['id', 'name', 'email']);
            }])
            ->get()->toArray();

        return view('admin.comment.index_comment', compact('comments'));

    }

    public function contact_admin(Request $request)
    {
        $comments = new Comment();
        $comments->content = $request->get('content');

        if ($comments->save()){

        }


        return redirect()->route('detail', compact('comments'));
    }

    public function remove($id)
    {
        $comments = Comment::destroy($id);
        if (empty($comments)) {
            abort(404);
        }

        return redirect()->route('index_comment', compact('comments'));
    }
}
