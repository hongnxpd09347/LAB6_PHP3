<h1>Tin mới nhất</h1>
@php
foreach($data as $tin) {
echo "<p> {$tin->tieuDe} </p>";
echo "<em> Ngày đăng: {$tin->ngayDang} </em>";
echo "<hr>";
}
@endphp