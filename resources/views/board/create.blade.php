<!DOCTYPE html>
<html>
<head>
    <title>Board Create</title>
</head>
<body>
    <h1>Board 新規作成</h1>

    <form action="{{ route('board.store') }}" method="POST">
        @csrf

        <label>person_id:</label><br>
        <input type="text" name="person_id" value="{{ old('person_id') }}"><br>
        @error('person_id')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <label>タイトル:</label><br>
        <input type="text" name="title" value="{{ old('title') }}"><br>
        @error('title')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <label>メッセージ:</label><br>
        <textarea name="message">{{ old('message') }}</textarea><br>
        @error('message')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <button type="submit">登録</button>
    </form>

    <a href="{{ route('board.index') }}">戻る</a>
</body>
</html>
