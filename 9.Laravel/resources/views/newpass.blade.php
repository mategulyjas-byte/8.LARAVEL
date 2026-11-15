<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    

<h2>{{__("Setting the new password")}}</h2>

<form action="" method="POST">
@csrf
<label for="password">{{__("Give your new password")}}</label>
<input type="password" name="password" id="password">

<button>{{__("Send")}}</button>

</form>


</body>
</html>