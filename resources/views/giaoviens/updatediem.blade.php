<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>updatediemhocsinh</title>
</head>
<body>
<h1>Cập nhật điểm học sinh</h1>
@if ($errors->any())
<div class="errors" style = "color:red">
    Vui lòng kiểm tra lại!
</div>
@endif
@foreach($ketqua as $kq)
<form method="POST" action="{{route('giaoviens.updatepost',['id'=>$kq->id,'id_cb'=>$kq->id_canbo])}}">
    @csrf
    <div>
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{$kq->name_hocsinh}}" readonly= true>
    </div>
    @error('name')
    <span style = "color:red">{{$message}}</span>
    @enderror
    <div>
    <label for="monhoc">Môn Học:</label>
    <input type="text" name="name_monhoc" value="{{$kq->name_monhoc}}" readonly= true>
    </div>
    @error('name_monhoc')
    <span style = "color:red">{{$message}}</span>
    @enderror
    <div>
    <label for="diemmieng">Điểm miệng:</label>
    <input type="text" name="diemmieng" value="{{$kq->diemmieng}}">
    </div>
    @error('diemmieng')
    <span style = "color:red">{{$message}}</span>
    @enderror
    <div>
    <label for="diem15phut">Điểm 15 phút:</label>
    <input type="text" name="diem15phut" value="{{$kq->diem15phut}}">
    </div>
    @error('diem15phut')
    <span style = "color:red">{{$message}}</span>
    @enderror
    <div>
    <label for="diem1tiet">Điểm 1 tiết:</label>
    <input type="text" name="diem1tiet" value="{{$kq->diem1tiet}}">
    </div>
    @error('diem1tiet')
    <span style = "color:red">{{$message}}</span>
    @enderror
    <div>
    <label for="diemhocky">Điểm học kỳ:</label>
    <input type="text" name="diemhocky" value="{{$kq->diemhocky}}">
    </div>
    @error('diemhocky')
    <span style = "color:red">{{$message}}</span>
    @enderror

    <button type="submit">Submit</button>
    @foreach($ketqua as $kq)
    <a href="{{route('giaoviens.listhocsinh',['id'=>$kq->id_canbo])}}"><button type="button">Back</button></a>
    @break
    @endforeach
</form>
@endforeach
</body>
</html>