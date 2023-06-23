<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Danh Sach Giao Vien</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Danh Sách Giáo Viên</h1>
        <form action="#" method="get">
            <input type="text" name="search" value="" placeholder="Nhập từ khóa tìm kiếm" >
            <input type="submit" value="Tìm kiếm">
        </form>
        @if(session('msg'))
        <div>{{session('msg')}}</div>
        @endif
        <a href="#"><button style="background-color:green">Add Giáo Viên</button></a>
        <table border=1  style = "text-align:Left ;width:100%">
            <tr width = 150px>
                <th rowspan="1"style="width: 200px;">Mã giáo viên</th>
                <th rowspan="1"style="width: 200px;">Tên học sinh</th>
                <th rowspan="1"style="width: 200px;">Chức vụ</th>
                <th colspan="3"style="width: 200px;text-align:center">Tùy Chọn</th>
            </tr>
            
            @foreach($giaoVienList as $gv)
            <tr>
                <td>{{$gv->id}}</td>
                <td>{{$gv->name}}</td>
                <td>{{$gv->chucvu}}</td>
                <td>
                <a href="{{route('giaoviens.listhocsinh',['id'=>$gv->id])}}">
                        <button style="background-color:yellow">Xem Ds Học Sinh Giảng Dạy</button>
                    </a>
                </td>

                <td>
                <a href="#">
                        <button style="background-color:yellow">Cập Nhật Giáo Viên</button>
                    </a>
                </td>
                <td>
                    <a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
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