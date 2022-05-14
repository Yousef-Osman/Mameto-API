<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'group_id' => 'required',
            'content' => 'required'
        ]);

        return Post::create($request->all());
    }

    public function show($id)
    {
        return Post::find($id);
    }

    public function update(Request $request, $id)
    {
        $product = Post::find($id);
        $product->update($request->all());
        return $product;
    }

    public function destroy($id)
    {
        return Post::destroy($id);
    }
}
