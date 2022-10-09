<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Check;
use Illuminate\Http\Request;
use App\Http\Requests\CheckRequest;

class CheckController extends Controller
{
    public function create(CheckRequest $request)
    {
        $form = $request->all();

        $gender = $request->gender ;

        if ($gender=="男") {
            $form["gender"] = 1;
        } else {
            $form["gender"] = 2;
        };

        Contact::create($form);
        return view('thanks');
    }    
}