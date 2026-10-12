<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
    <ul>
        @foreach ($users as $user)
            <li>{{$user->name}} ({{$user->age}}歳)</li>
        @endforeach
    </ul>
</body>
</html>