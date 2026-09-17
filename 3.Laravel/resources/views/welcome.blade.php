<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>




</head>
<body>
    



<div>Regisztrációs Űrlap</div>
<br>

<form action="" method="POST">


@csrf
<input type="text" name="name" id="" placeholder="Add meg a neved">
@error('name')
<div>{{$message}}</div>
    
@enderror
<br>

<input type="text" name="email" placeholder="Add meg az e-mail címed">
@error('email')
<div>{{$message}}</div>
    
@enderror
<br>

<button>Küldés</button>
</form>






</body>
</html>