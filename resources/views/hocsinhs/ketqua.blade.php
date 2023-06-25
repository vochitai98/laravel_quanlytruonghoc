<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin chi tiết điểm</title>
</head>
<body>
    <h1 style="text-align: center">Thông tin điểm</h1>
@foreach($hocsinh as $hs)
<h2>Họ tên : {{$hs->name}}</h2>
<div>Lớp : {{$hs->id_lop}}</div>
<div>Mã học sinh : {{$hs->id}}</div>
@endforeach
<table border=1  style = "text-align:Left ;width:100%">
            <tr width = 150px>
                <th rowspan="1"style="width: 200px;">Môn học</th>
                <th rowspan="1">Điểm miệng</th>
                <th rowspan="1">Điểm 15 phút</th>
                <th rowspan="1">Điểm 1 tiết</th>
                <th rowspan="1">Điểm học kì</th>
                <th rowspan="1">Điểm Trung bình môn</th>
            </tr>
            @foreach($ketquas as $kq)
            <tr >
                <td >{{$kq->name_monhoc}}</td>
                <td >{{$kq->diemmieng}}</td>
                <td >{{$kq->diem15phut}}</td>
                <td >{{$kq->diem1tiet}}</td>
                <td >{{$kq->diemhocky}}</td>
                <td >{{number_format($kq->diemtrungbinh, 1)}}</td>
            </tr>
            @endforeach
        </table>
        <button type="button"><a href="{{route('hocsinhs.home')}}">Back</a></button>
</body>
</html>