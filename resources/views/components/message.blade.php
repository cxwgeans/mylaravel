<div style="border:solid 1px gray; padding0px 10px; margin10px 0px;">
    <p style="color:red;">Message component</p>
    <p style="font-size:12pt;">{{$msg}}</p>
    <hr />
    <div style="margin:0px 100px; font-size12pt; color:blue;">
        {{ $slot }}
    </div>
    <hr />
    <ul>
        <li>[id] {{$data['id']}}</li>
        <li>[title] {{$data['title']}}</li>
        <li>[content] {{$data['body']}}</li>
    </ul>
</div>