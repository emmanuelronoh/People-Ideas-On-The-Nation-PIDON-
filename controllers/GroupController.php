<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function create()
    {
        return view('group.create');
    }

    public function manage($id)
    {
        $group = Group::find($id);
        return view('group.manage', ['group' => $group]);
    }

    // Add more methods as needed for group management
}
