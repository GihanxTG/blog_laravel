<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Tin mới nhất</h1>

    @foreach ($data as $tin)
        <a href="/chitiettin/{{$tin->id}}">{{$tin->tieuDe}} - ({{$tin->ngayDang}})</a><hr>
        
    @endforeach
</body>
</html>