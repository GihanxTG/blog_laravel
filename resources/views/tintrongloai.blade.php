<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loại tin</title>
</head>
<body>
    @if ($loaitin)
        <h1>Tin trong loại {{ $loaitin->ten }}:</h1>

        @foreach ($data as $tin)
            <a href='{{ url("/chitiettin/{$tin->id}") }}'>
                <h3>{{$tin->tieuDe}}</h3>
            </a>
            <p>{{$tin->tomTat}}</p>
            <hr>
        @endforeach
    @else
        <p>Không tồn tại loại tin này</p>
    @endif
</body>
</html>