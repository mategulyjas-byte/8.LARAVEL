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


<label for="name"></label>
<input type="text" name="name" id="name"  placeholder="Add meg a neved"  value="{{old ("name")}}">

@error('name')
<div>{{$message}}</div>
    
@enderror

<input type="hidden"  name="_token"  value="{{csrf_token()}}">

<button> Küldés</button>





</form>









</body>
</html>