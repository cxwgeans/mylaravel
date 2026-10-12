<!DOCTYPE html>
<html>
<head>
    <title>Board Edit</title>
</head>
<body>
    <h1>Board 編集</h1>

    <form action="{{ route('board.update', $board->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>person_id:</label><br>
        <input type="text" name="person_id" value="{{ old('person_id', $board->person_id) }}"><br>

        <label>タイトル:</label><br>
        <input type="text" name="title" value="{{ old('title', $board->title) }}"><br>

        <label>メッセージ:</label><br>
        <textarea name="message">{{ old('message', $board->message) }}</textarea><br>

        <button type="submit">更新</button>
    </form>

    <a href="{{ route('board.index') }}">戻る</a>
</body>
</html>
