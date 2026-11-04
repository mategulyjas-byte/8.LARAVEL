<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<h2>{{__("Login form")}}</h2>



@if (session()->has("error"))
<div>{{session()->get("error")}}</div>
    
@endif

<form action="" method="POST">
@csrf
<label for="email">{{__("Give your email adress")}}</label>
<br>
<input type="email" name="email" id="email" value="{{old("email")}}">

<br>
<label for="password">{{__("Give your password")}}</label>
<br>
<input type="password" name="password">
<br>
<input type="checkbox" name="remember_" >
<br>
<label for="">{{__("Remember me")}}</label>
<br>
<button>{{__("Login")}}</button>

</form>


<br>

<button><a href="/">{{__("Go to Welcome page")}}</a></button>
<br>
<br>
<button><a href="/registration">{{__("Go to registration page")}}</a></button>




</body>
</html>