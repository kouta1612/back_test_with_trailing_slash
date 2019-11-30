<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

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
            // pattern ①
            return redirect()
                ->to(config('app.url') .  "create/") // 絶対URLあてにredirectすると、"trailing slash"が削除されないで済む
                ->withInput($request->only('title')); // 入力データをフラッシュデータとして保存

            // pattern ②
            return redirect()
                ->to('/create\/', 301) // trailing slashを作成するために"\"を加える
                ->withInput($request->only('title')); // 入力データをフラッシュデータとして保存
        }
        Post::create(['title' => $request->title]);
        return view('complete');
    }
}
