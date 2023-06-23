<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trang Chủ</title>
    </head>
    <body>
        <h1>Quản lý Trường Học</h1>
        <ul>
            <a href="{{route('giaoviens.home')}}"><li>Giáo Viên</li></a>
            <a href="{{route('hocsinhs.home')}}"><li>Học Sinh</li></a>
        </ul>
    </body>
</html>
