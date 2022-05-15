<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'group_id' => 'required',
            'content' => 'required',
            'image' => 'file|image|mimes:jpeg,png,gif,jpg|max:2048'
        ]);

        if ($request->file('image')) {
            $imagePath = $this->storeImage($request);
            $data['image_path'] = $imagePath;
        }

        $post = Post::create($data);
        if (!$post) {
            return response()->json(['message' => 'internal server error'], 500);
        }

        return $post;
    }

    protected function storeImage(Request $request)
    {
        $path = $request->file('image')->store('public/Images/Posts');
        return substr($path, strlen('public/'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => 'not found'], 404);
        }

        $image_path = storage_path().'/app/public/'.$post->image_path;

        if ($post->image_path && file_exists($image_path)) {
            $fileData = file_get_contents($image_path);
            $fileEncode = base64_encode($fileData);
            $post->image = $fileEncode;
        }

        return $post;
    }

    //this method is experimental and has no route (add it in api routes)
    public function getimage($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => 'not found'], 404);
        }

        $image_path = storage_path().'/app/public/'.$post->image_path;

        if (!$post->image_path || !file_exists($image_path)) {
            return response()->json(['message' => 'not found'], 404);
        }

    	return response()->download($image_path);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'group_id' => 'required',
            'content' => 'required',
            'image' => 'file|image|mimes:jpeg,png,gif,jpg|max:2048'
        ]);

        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'not found'], 404);
        }
        $post->update($request->all());

        return $post;
    }

    public function destroy($id)
    {
        $result = Post::destroy($id);
        if ($result < 1) {
            return response()->json(['message' => 'bad request'], 400);
        }

        return response()->json(['message' => 'deleted'], 200);
    }
}
