<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $message = new Message();
        $message->user_id = $request->user_id;
        $message->room_id = $request->room_id;
        $message->message = $request->message;
        $message->save();

        event(new MessageRecieved($message, $request->room_id));

        return response($message, 201);
    }

    /**
     * メッセージの一覧取得
     *
     * @param String $id
     * @return App\Message $messages
     */
    public function show(String $id)
    {
        $messages = Message::where('room_id', $id)
                        ->orderBy(Message::CREATED_AT)->get();

        return $messages ?? abort(404);
    }
}
