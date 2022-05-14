<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //Display a listing of the resource.
    public function index()
    {
        //
    }

    //Show the form for creating a new resource.
    public function create()
    {
        $user = new User;
        $user->name = 'user2';
        $user->email = 'user2@email.com';
        $user->password = bcrypt('123456');

        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'user created successfully',
            'user' => $user
        ]);

        // return 'working well';
    }

    //Store a newly created resource in storage.
    public function store(Request $request)
    {

    }

    //Display the specified resource.
    public function show(User $user)
    {
        //
    }

    //Show the form for editing the specified resource.
    public function edit(User $user)
    {
        //
    }

    //Update the specified resource in storage.
    public function update(Request $request, User $user)
    {
        //
    }

    //Remove the specified resource from storage.
    public function destroy(User $user)
    {
        //
    }
}
