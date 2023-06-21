<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>addhocsinh</title>
</head>
<body>
<h1>Thêm học sinh</h1>
@if ($errors->any())
<div class="errors" style = "color:red">
    Vui lòng kiểm tra lại!
</div>
@endif
<form method="POST" action="#">
    @csrf
    <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    </div>
    @error('name')
    <span style = "color:red">{{$message}}</span>
    @enderror
    <div>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email">
    </div>
    @error('email')
    <span style = "color:red">{{$message}}</span>
    @enderror
    <div>
    <label for="sdt">SDT:</label>
    <input type="text" name="sdt" id="sdt">
    </div>
    @error('sdt')
    <span style = "color:red">{{$message}}</span>
    @enderror
    <div>
    <label for="lop">Lớp:</label>
    <select name="id_lop">
        @foreach($lopList as $lop)
        <option value="{{$lop->id}}">{{$lop->name}}</option>
        @endforeach
    </select>
    </div>

    <button type="submit">Submit</button>
    <button type="button"><a href="{{route('hocsinhs.home')}}">Back</a></button>
</form>
</body>
</html>