<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;
use App\Mail\CommentReceived;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Team $team, CommentRequest $request)
    {
        $data = $request->validated();
        // $data['user_id'] = auth()->id();
        // $team->comments()->create($data);

        $comment = new Comment($data);
        $comment->user()->associate(auth()->user());

        $team->comments()->save($comment);


        Mail::to($team->email)->send(new CommentReceived($comment));
        // info($team);

        return back();
    }
}
