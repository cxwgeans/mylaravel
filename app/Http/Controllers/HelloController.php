<?php

namespace App\Http\Controllers;

use App\Models\Member;

//use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $users = Member::getAll();

        return view('hello', ['users' => $users]);
    }
}
