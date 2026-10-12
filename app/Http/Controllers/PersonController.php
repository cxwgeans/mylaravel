<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBoardRequest;
use App\Models\Board;

class PersonController extends Controller
{
    public function index(Request $request){
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }

    public function find(Request $request){
        return view('person.find', ['input' => '']);
    }

    public function search(Request $request){
        $item = Person::where('name', $request->input('input'))->first();
        //dd($item);
        $param = ['input' => $request->input('input'), 'item' => $item];
        return view('person.find', $param);
    }

    public function add(Request $request){
        return view('person.add');
    }

    public function create(Request $request){
        $person = new Person;
        $person->name = $request->name;
        $person->mail = $request->mail;
        $person->age = $request->age;
        $person->save();
        return redirect('/person');
    }

    public function edit(Request $request){
        $person = Person::find($request->id);
        return view('person.edit', ['form' => $person]);
    }
    
    public function update(Request $request){
        $person = Person::find($request->id);
        $person->name = $request->name;
        $person->mail = $request->mail;
        $person->age = $request->age;
        $person->save();
        return redirect('/person');
    }

    public function delete(Request $request){
        $person = Person::find($request->id);
        return view('person.del', ['form' => $person]);
    }

    public function remove(Request $request){
        $person = Person::find($request->id);
        $person->delete();
        return redirect('/person');
    }

    public function store(StoreBoardRequest $request){
        Board::create($request->validated());
        return redirect('/borard');
    }

    public function show($id){
        $person = Person::with('boards')->findOrFail($id);
        return view('person.show', ['person' => $person]);
    }
}
