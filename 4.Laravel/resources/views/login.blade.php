<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>




</head>
<body>
    
@if (Session::has("error"))
    <li>{{Session::get("error")}}</li>

    
@endif


@if (Session::has("success"))
    <li>{{Session::get("success")}}</li>

    
@endif

<div>Login</div>
<br>

<form action="" method="POST">

@csrf

<input type="email"   name="email" placeholder="Add meg az e-mail címed"
value="{{old("email")}}">

<br>

<input type="password" name="password" placeholder="Add meg  a jelszavad" id="">

<br>
<br>

<input type="checkbox" name="remember" value="on"> jegyezzen meg



<button>Küldés</button>
</form>






</body>
</html>