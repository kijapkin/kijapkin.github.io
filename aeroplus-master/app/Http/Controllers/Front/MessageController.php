<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Validator;
use CRUDBooster;
use App\Http\Controllers\Controller;
use App\Messages;

class MessageController extends Controller
{
    public function main(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'email' => 'required|max:255',
            'text' => 'required|min:3|max:5000'
        ]);
        if ($validator->fails())
        	return json_encode($validator);
        $Messages = new Messages();
        $Messages->name = $request->input('username');
        $Messages->email = $request->input('email');
        $Messages->message = $request->input('text');
        $Messages->save();
        CRUDBooster::sendNotification([
            'content' => 'Надйшло нове повідомлення від ' . $request->input('username') . ' (' .$request->input('email') . ')',
            'to' => '/admin/messages/detail/' . $Messages->id
        ]);
        return json_encode(['type' => 'success', 'message' => 'Ваш запит відправлено менеджеру. Очікуйте дзвінок.']);
    }
}
