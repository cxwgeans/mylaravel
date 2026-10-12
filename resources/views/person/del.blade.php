@extends('layouts.hello1app')

@section('title', 'Person.Delete')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <table>
        <tr><th>name:</th><td>{{$form->name}}</td></tr>
        <tr><th>mail:</th><td>{{$form->mail}}</td></tr>
        <tr><th>age:</th><td>{{$form->age}}</td></tr>
    </table>
    <form action="/person/del" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <input type="submit" value="send">
    </form>
@endsection

@section('footer')
copyright 2025 yuki.
@endsection