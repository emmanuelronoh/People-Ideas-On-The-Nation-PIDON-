<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminToolsController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function moderation()
    {
        return view('admin.moderation');
    }

    public function contentMonitoring()
    {
        return view('admin.content_monitoring');
    }

    // Add more methods as needed for admin tools
}
