<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Danh Sach Giang Day</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Quản Lý Học Sinh</h1>
        @foreach($hocSinhList as $hs)
        <div style = "text-align:right">Name : {{$hs->name_canbo}}</div>
        <div style = "text-align:right">ID : {{$hs->id_canbo}}</div>
        @break
        @endforeach
        <form action="#" method="get">
            <input type="text" name="search" value="" placeholder="Nhập từ khóa tìm kiếm" >
            <input type="submit" value="Tìm kiếm">
        </form>
        @if(session('msg'))
        <div style="color:green;font-size:30px">{{session('msg')}}</div>
        @endif
        <table border=1  style = "text-align:Left ;width:100%">
            <tr width = 150px>
                <th rowspan="1">Mã học sinh</th>
                <th rowspan="1">Họ tên học sinh</th>
                <th rowspan="1">Tên lớp</th>
                <th rowspan="1">Tên môn học</th>
                <th rowspan="1">Điểm miệng</th>
                <th rowspan="1">Điểm 15 phút</th>
                <th rowspan="1">Điểm 1 tiết</th>
                <th rowspan="1">Điểm học kì</th>
                <th colspan="1"style="width: 200px;text-align:center">Tùy Chọn</th>
            </tr>
        @foreach($hocSinhList as $hs)
            <tr>
                <td>{{$hs->id}}</td>
                <td>{{$hs->name}}</td>
                <td>{{$hs->name_lop}}</td>
                <td>{{$hs->name_monhoc}}</td>
                <td>{{$hs->diemmieng}}</td>
                <td>{{$hs->diem15phut}}</td>
                <td>{{$hs->diem1tiet}}</td>
                <td>{{$hs->diemhocky}}</td>
                <td>
                <a href="{{route('giaoviens.update',['id_hs'=>$hs->id,'id_cb' =>$hs->id_canbo])}}">
                        <button style="background-color:yellow">Cập nhật điểm</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </table>
        <a href="{{route('giaoviens.home')}}"><button type="button">Back Home</button></a>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script src="" async defer></script>
    </body>
</html>