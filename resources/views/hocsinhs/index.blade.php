<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Danh Sach Hoc Sinh</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Danh Sách Học Sinh</h1>
        <form action="{{route('hocsinhs.search')}}" method="get">
            <input type="text" name="search" value="{{ old('search') }}" placeholder="Nhập từ khóa tìm kiếm" >
            <input type="submit" value="Tìm kiếm">
        </form>
        @if(session('msg'))
        <div>{{session('msg')}}</div>
        @endif
        <a href="{{ route('hocsinhs.add') }}"><button style="background-color:green">Add HocSinh</button></a>
        <table border=1  style = "text-align:Left ;width:100%">
            <tr width = 150px>
                <th rowspan="1"style="width: 200px;">MSSV</th>
                <th rowspan="1"style="width: 200px;">Tên học sinh</th>
                <th rowspan="1"style="width: 200px;">Tên lớp</th>
                <th rowspan="1"style="width: 200px;">Email</th>
                <th rowspan="1"style="width: 200px;">SDT</th>
                <th colspan="2"style="width: 200px;text-align:center">Tùy Chọn</th>
            </tr>
            
            @foreach($hocSinhList as $hs)
            <tr>
                <td>{{$hs->id}}</td>
                <td>{{$hs->name}}</td>
                <td>{{$hs->id_lop}}</td>
                <td>{{$hs->email}}</td>
                <td>{{$hs->sdt}}</td>
                <td>
                <a href="{{route('hocsinhs.update',['id' => $hs->id])}}">
                        <button style="background-color:yellow">Cập Nhật</button>
                    </a>
                </td>
                <td>
                    <a href="{{route('hocsinhs.delete',['id' => $hs->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                        <button style="background-color:red">Xóa</button>
                    </a>
                </td>
                </tr>
                
            </tr>
            @endforeach
        </table>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script src="" async defer></script>
    </body>
</html>