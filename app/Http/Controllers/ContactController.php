<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function check(ContactRequest $request)
    {
        // 氏・名を結合
        $fullname = "{$request->sei} {$request->mei}";

        // 性別の判定
        if($request->gender == "man"){
            $gender = "男";
        } else {
            $gender = "女";
        };

        // 郵便番号の整形
        $postcode = mb_convert_kana($request->postcode,'r');
        
        return view('check' ,  [
            'fullname' => $fullname,                        
            'gender' => $gender,            
            'email' => $request->email,
            'postcode' => $postcode,
            'adress' => $request->adress,
            'building_name' => $request->building_name,
            'opinion' => $request->opinion
        ]);
    }

}