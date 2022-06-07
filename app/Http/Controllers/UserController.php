<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // DBよりBookテーブルの値を全て取得
        $table = User::all();

        // 取得した値をビュー「book/index」に渡す
        return view('user/index', compact('table'));
    }

    public function edit($id)
    {
        // DBよりURIパラメータと同じIDを持つBookの情報を取得
        $row = User::findOrFail($id);

        // 取得した値をビュー「book/edit」に渡す
        return view('user/edit', compact('row'));
    }
}
