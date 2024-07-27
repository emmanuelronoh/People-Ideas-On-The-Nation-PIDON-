<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('user.profile', compact('user'));
    }

    public function followers($id)
    {
        $user = User::findOrFail($id);
        $followers = $user->followers; // Assuming a followers relationship exists
        return view('user.followers', compact('followers'));
    }

    public function following($id)
    {
        $user = User::findOrFail($id);
        $following = $user->following; // Assuming a following relationship exists
        return view('user.following', compact('following'));
    }

    // Add more methods as needed
}
