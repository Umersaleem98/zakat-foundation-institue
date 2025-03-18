<?php

namespace App\Http\Controllers\Dashboard\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Create()
    {
        return view('layouts.admin.pages.users.index');
    }

    public function Show()
    {
        $users = User::all();
        return view('layouts.admin.pages.users.list', compact('users'));
    }

    public function store(Request $request)
{
    $user = new User;

    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password); // Hashing password
    $user->role = $request->role;
    $user->save();

    // Redirect back with success message
    return redirect()->back()->with('success', 'User created successfully!');
}


}
