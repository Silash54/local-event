<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class messageController extends Controller
{
    public function messageSave(Request $request)
    {
        $validateData=Validator::make($request->all(),
    [
        'subject'=>'required|min:5',
        'body'=>'required|min:10|max:200'
    ]);
    if($validateData->fails()){
        return response()->json([
            'status'=>false,
            'message'=>$validateData->errors()
        ]);
    }
    message::create([
        'subject'=>$request->subject,
        'body'=>$request->body
    ]);
    return redirect()->route('dashboard')->with('success','Message sent Successfully');
    }

    public function showMessage()
    {
        $showMessage=message::first();
        return view('backend.message.message',compact('showMessage'));
    }
}
