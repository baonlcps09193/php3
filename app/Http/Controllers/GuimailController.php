<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Session;

class GuimailController extends Controller
{
    function guimaillienhe(Request $request){
        $input = $request->all();
        Mail::send('mauthulienhe', array( 'name'=>$input["name"], 'email'=>$input["email"], 'content'=>$input['message']), function($message){
            $message->from('baonlcps09193@fpt.edu.vn' , 'Người liên hệ')
                    ->to('monkeyd.lucy2110@gmail.com', 'Hash | Tin tức')
                    ->subject('Thư liên hệ');
        });
        Session::flash('thongbao', 'Đã gửi mail thành công');
    }
}
