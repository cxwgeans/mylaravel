@extends('layouts.hello1app')

@section('title', 'Person.find')

@section('menubar')
    @parent
    検索ページ
@endsection

@section('content')
    <form action="/person/find" method="post">
        @csrf
        <input type="text" name="input" value="{{$input}}">
        <input type="submit" value="find">
    </form>

    @if(isset($item))
    <table>
        <tr><th>Data</th></tr>
        <tr><td>{{$item->id}}</td><td>{{$item->name}}</td><td>{{$item->age}}</td></tr>
    </table>
    @endif
@endsection

@section('footer')
Copyright 2026 yuki.
@endsection
