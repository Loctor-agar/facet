<?php

namespace App\Http\Controllers;

use App\Mail\send;
use App\Props;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //
    public function send(Request $request)
    {
//        dd($request->all());
        $check = Props::where('send_token',$request->_token)->get();
        if (count($check) == 0)
        {
            $bid = new Props();
            $bid->send_token = $request->_token;
            $bid->save();
            $check = 1;
            Mail::to('creativevision.notagency@gmail.com')->send(new send($request->all()));
        }
        else {
            $check = 0;
        }

        return response()->json([
            'status' => 'success',
            'check' => $check
        ]);
    }
}
