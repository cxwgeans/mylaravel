<!DOCTYPE html>
<html>
<head>
    <title>Board Index</title>
</head>
<body>
    <h1>Board 一覧</h1>

    <a href="{{ route('board.create') }}">新規作成</a>

    <hr>

    @foreach($items as $item)
        <p>
            <strong>{{ $item->title }}</strong><br>
            {{ $item->message }}<br>
            <small>person_id: {{ $item->person_id }}</small>
        </p>

        <a href="{{ route('board.edit', $item->id) }}">編集</a>

        <form action="{{ route('board.destroy', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
        </form>

        <hr>
    @endforeach
</body>
</html>
