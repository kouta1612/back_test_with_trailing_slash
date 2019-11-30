<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function confirm(Request $request)
    {
        return view('confirm', compact('request'));
    }

    public function complete(Request $request)
    {
        if ($request->action == 'back') {
            return redirect('/create/')
                ->withInput($request->only('title')); // 入力データをフラッシュデータとして保存
        }
        Post::create(['title' => $request->title]);
        return view('complete');
    }
}
