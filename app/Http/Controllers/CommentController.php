<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $user_id = $request->user()->id;
        $Comments = Comment::where('user_id', $user_id)->get();
        return $Comments;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'post_id' => 'required',
            'content' => 'required',
        ]);

        $data['user_id'] = $request->user()->id;

        $Comment = Comment::create($data);
        if (!$Comment) {
            return response()->json(['message' => 'internal server error'], 500);
        }

        return $Comment;
    }


    public function show($id)
    {
        $Comment = Comment::find($id);

        if (!$Comment) {
            return response()->json(['message' => 'not found'], 404);
        }

        return $Comment;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $user_id = $request->user()->id;

        $Comment = Comment::find($id);
        if (!$Comment || $Comment['user_id'] != $user_id) {
            return response()->json(['message' => 'not found'], 404);
        }
        $Comment->update($request->all());

        return $Comment;
    }

    public function destroy(Request $request, $id)
    {
        $Comment = Comment::find($id);
        $user_id = $request->user()->id;

        //if comment doesn't exsist or doesn't belong to the sender retrun 404
        if (!$Comment || $Comment['user_id'] != $user_id) {
            return response()->json(['message' => 'not found'], 404);
        }

        $result = Comment::destroy($id);
        if ($result < 1) {
            return response()->json(['message' => 'bad request'], 400);
        }

        return response()->json(['message' => 'deleted'], 200);
    }
}
