<!DOCTYPE html>
<html>
<head>
    <title>Person Detail</title>
</head>
<body>
    <h1>{{ $person->name }} さんのページ</h1>

    <p>メール: {{ $person->mail }}</p>
    <p>年齢: {{ $person->age }}</p>

    <hr>

    <h2>{{ $person->name }}さんの投稿一覧（Board）</h2>

    @if($person->boards->isEmpty())
        <p>投稿はありません。</p>
    @else
        @foreach($person->boards as $board)
            <div>
                <strong>{{ $board->title }}</strong><br>
                {{ $board->message }}<br>
                <small>投稿ID: {{ $board->id }}</small>
            </div>
            <hr>
        @endforeach
    @endif

    <a href="{{ route('board.create') }}">新規投稿する</a>
</body>
</html>