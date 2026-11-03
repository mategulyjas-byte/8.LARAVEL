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

<form action="" method="POST">
@csrf
<input type="email" name="email" id="" value="{{old("email")}}">


<input type="password" name="password">

<button>{{__("Login")}}</button>

</form>





</body>
</html>