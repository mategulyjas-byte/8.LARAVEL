<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<form action="" method="POST">

    @csrf
<label for="name"> Give your name</label>
<input type="text" name="name" id=""  value="{{old("name")}}">
@error('name')
    <div>{{$message}}</div>
@enderror
<br>

<label for="email"> Give your email adress</label>
<input type="email" name="email" value="{{old("email")}}">
@error('email')
    <div>{{$message}}</div>
@enderror

<button> Registration</button>
</form>


</body>
</html>