<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>updatehocsinh</title>
</head>
<body>
<h1>Cập nhật học sinh</h1>
@if ($errors->any())
<div class="errors" style = "color:red">
    Vui lòng kiểm tra lại!
</div>
@endif
@foreach($hocsinh as $hocsinh)
<form method="POST" action="{{route('hocsinhs.updatepost',['id' => $hocsinh->id])}}">
    @csrf
    <div>
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{$hocsinh->name}}">
    </div>
    @error('name')
    <span style = "color:red">{{$message}}</span>
    @enderror
    <div>
    <label for="email">Email:</label>
    <input type="text" name="email" value="{{$hocsinh->email}}">
    </div>
    @error('email')
    <span style = "color:red">{{$message}}</span>
    @enderror
    <div>
    <label for="sdt">SDT:</label>
    <input type="text" name="sdt" value="{{$hocsinh->sdt}}">
    </div>
    @error('sdt')
    <span style = "color:red">{{$message}}</span>
    @enderror
    <button type="submit">Submit</button>
    <button type="button"><a href="{{route('hocsinhs.home')}}">Back</a></button>
    @endforeach
</form>
</body>
</html>