<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{"Registration"}}</title>
</head>
<body>
    


<div>{{__("Registration")}}</div>
<br>

<form action="" method="POST">

@csrf

<label for="name">{{__("Please enter your name")}}</label>
<br>
<input type="text" name="name" id=" name" value="{{old("name")}}">
<br>
@error('name')
    <div>{{$message}}</div>
@enderror

<br>


<label for="email">{{__("Please enter your email address")}}</label>
<br>
<input type="email" name="email" id=" email" value="{{old("email")}}">
<br>
@error('email')
    <div>{{$message}}</div>
@enderror


<br>
<label for="password">{{__("Please enter your password")}}</label>
<br>
<input type="password" name="password" id="password" >
<br>
@error('password')
    <div>{{$message}}</div>
@enderror

<br>
<label for="password_confirmation">{{__("Please confirm your password")}}</label>
<br>
<input type="password" name="password_confirmation" id="password_confirmation" >


<br>

<button> {{__("Send")}}</button>

</form>


<button><a href="/">{{__("Go to Introduction Page")}}</a></button>

</body>
</html>