<?php

namespace App\Http\Controllers;

use App\Mail\PostSendMail;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function index() {
        Mail::to("manasyan.tigran@mail.ru")->send(new TestMail());
    }

    public function post_send_mail(Request $request) {
        $data = [
            "name" => $request['name'],
            "email" => $request['email'],
            "msg" => $request['msg'],
        ];

        Mail::to($data['email'])->send(new PostSendMail($data));
    }
}
