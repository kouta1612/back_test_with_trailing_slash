<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function confirm(Request $request)
    {
        //
    }

    public function complete(Request $request)
    {
        //
    }
}
