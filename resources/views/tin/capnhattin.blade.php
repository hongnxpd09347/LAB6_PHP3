<!DOCTYPE html>
<html>
<head>
    <title>Cập Nhật Tin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="/tin/sua/{{ $tin->id }}" method="post" class="col-7 m-auto">
        @csrf
        <p> Tiêu đề:  <input name="tieuDe" class="form-control" value="{{ $tin->tieuDe }}"></p>
        <p> Tóm tắt:  <textarea name="tomTat" class="form-control">{{ $tin->tomTat }}</textarea></p>
        <p> urlHinh:  <input name="urlHinh" class="form-control" value="{{ $tin->urlHinh }}"></p>
        <p> idLT:   <select name="idLT" class="form-control">
                <option value="1" {{ $tin->idLT == 1 ? 'selected' : '' }}>Xã hội</option>
                <option value="3" {{ $tin->idLT == 3 ? 'selected' : '' }}>Du lịch</option>
            </select>
        </p>
        <p><button type="submit" class="bg-warning p-2">Cập Nhật tin</button></p>
    </form>
</body>
</html>
