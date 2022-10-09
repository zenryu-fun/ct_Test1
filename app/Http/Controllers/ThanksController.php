<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ThanksRequest;

class ThanksController extends Controller
{
    public function index()
    {
        return view('contact');
    }

}