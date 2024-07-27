<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    // Constructor to apply middleware for authentication
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the list of messages between the authenticated user and another user.
     *
     * @param  int  $userId
     * @return \Illuminate\View\View
     */
    public function index($userId)
    {
        // Fetch the authenticated user
        $authUser = Auth::user();

        // Fetch the messages between the authenticated user and the specified user
        $messages = Message::where(function ($query) use ($authUser, $userId) {
            $query->where('sender_id', $authUser->id)
                  ->where('recipient_id', $userId);
        })->orWhere(function ($query) use ($authUser, $userId) {
            $query->where('sender_id', $userId)
                  ->where('recipient_id', $authUser->id);
        })->get();

        // Fetch the user to chat with
        $user = User::findOrFail($userId);

        return view('message.index', compact('messages', 'user'));
    }

    /**
     * Store a new message.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'recipient_id' => 'required|exists:users,id',
            'content' => 'required|string|max:1000',
        ]);

        // Create a new message
        $message = new Message();
        $message->sender_id = Auth::id();
        $message->recipient_id = $request->recipient_id;
        $message->content = $request->content;
        $message->save();

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    /**
     * Show the form for creating a new message.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('message.create');
    }
}
