<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__($title)}}</title>
</head>
<body>
   
    
<h2>{{__("Registration")}}</h1>
<br>
<form action="" method="post">
@csrf

<label for="name"> {{__("Give your name")}}</label>
<br>
<input type="text" name="name" id="" placeholder="{{__("John Doe")}}" value="{{old("name")}}">
@error('name')
    <div>{{$messgae}}</div>
@enderror
<br>

<label for="email">{{__("Give your email address")}}</label>
<br>
<input type="email" name="email" id="email" placeholder="{{__("example@example.com")}}"  value="{{old("email")}}">
@error('email')
<div>{{__("$message")}}</div>
@enderror

<br>

<label for="password">{{__("Give your password")}}</label>
<br>
<input type="password" name="password" id="paasword">
@error('password')
<div>{{$message}}</div>
@enderror
<br>

<label for="password_confirmation">{{__("Password confirmation")}}</label>
<br>
<input type="password" name="password_confirmation" id="password_confirmation">
{{-- <input type="hidden"  name="token" value="{{csrf_token()}}"> --}}
<br>

<button> {{__("Registration")}}</button>
</form>



</body>
</html>