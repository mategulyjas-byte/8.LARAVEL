<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    
<h2>{{__("Request a new password")}}</h2>

<form action="" method="POST">

@csrf

<label for="email">{{__("Give your email adress")}}</label>
<input type="email" name="email" id="email">



<button> {{__("Send")}}</button>
</form>


</body>
</html>