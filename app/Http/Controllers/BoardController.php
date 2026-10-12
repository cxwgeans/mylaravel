<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Http\Requests\StoreBoardRequest;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        $items = Board::all();
        return view('board.index', ['items' => $items]);
    }

    public function create()
    {
        return view('board.create');
    }

    public function store(StoreBoardRequest $request)
    {
        Board::create($request->validated());
        return redirect('/board');
    }

    public function edit(Board $board)
    {
        return view('board.edit', ['board' => $board]);
    }

    public function update(Request $request, Board $board)
    {
        $board->update($request->all());
        return redirect('/board');
    }

    public function destroy(Board $board)
    {
        $board->delete();
        return redirect('/board');
    }
}

