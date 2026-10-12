@extends('layouts.hello1app')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@livewireScripts
@livewireStyles

@section('content')
    <p>ここが本文のコンテンツです。</p>
    
    @include('hello1.message', [
        'msg_title' => 'OK',
        'msg_content' => 'サブビューです'
        ])
    <livewire:hello1-component msg="下のボタンを押してください" />

    <p>Controller value<br>'message' = {{$data}}</p>
    <h2>コンポーネント</h2>
    <x-package-message :id="$id">
        <p>※これはコンポーネント内に追加したコンテンツです</p>
    </x-package-message>
    <p>※上がコンポーネントの表示です。</p>

    <table>
        @foreach($dataM as $item)
        <tr>
            <th style="border: solid 1px #aaa; padding:5px 10px;">{{$item['name']}}</th>
            <td style="border: solid 1px #aaa; padding:5px 10px;">{{$item['mail']}}</td>
        </tr>
        @endforeach
    </table>
    <hr />
    <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td>
        </tr>            
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2025 Iida
@endsection