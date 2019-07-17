<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Room;
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

    public function comment_not_logged(Request $request, $id)
    {
        $comments = new Comment();
        $comments->name = $request->get('title');
        $comments->email = $request->get('email');
        $comments->content = $request->get('content');
        $rooms = Room::find($id);
        $comments->room_url = $request->getHttpHost() . '/rooms/detail/' . $id;
        $comments->save();


        return redirect()->route('detail', compact('comments', 'rooms'));
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
