<!DOCTYPE html>
<html>
<head>
    <title>Danh Sách Tin</title>
</head>
<body>
    <h1>Danh Sách Tin</h1>
    <ul>
        @foreach ($tin as $t)
            <li>{{ $t->tieuDe }} - {{ $t->tomTat }}</li>
        @endforeach
    </ul>
</body>
</html>
