<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Hello1Controller extends Controller
{
    public function index(Request $request)
    {
        //$data = [
        //    ['name' => '山田たろう', 'mail' => 'hogehoge@hoge.com'],
        //    ['name' => '田中はなこ', 'mail' => 'hogehoge@hoge.com'],
        //    ['name' => '鈴木さちこ', 'mail' => 'hogehoge@hoge.com']
        //];
        $data = 'Hello Comtroller!';
        $id = $request->id;
        
        if (isset($request->id)){
            $param = ['id' => $request->id];
            $items = DB::select('select * from people where id = :id', $param);
        } else {
            $items = DB::select('select * from people');
        }
        
        return view('hello1.index', [
            'data' => $data,
            'dataM' => $request->dataM,
            'id' => $id,
            'items' => $items
        ]);
        
        
    }

    public function post(Request $request)
    {
        $id = $request->id;
        return view('hello1.index', ['id' => $id]);
    }
}