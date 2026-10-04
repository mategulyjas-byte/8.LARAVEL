<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__("Profile")}}</title>
</head>
<body>
    
@if (Session::has("error"))
   {{ Session::get("error")}}

    
@endif



    <div>{{__("Profile")}}</div>
<br>

<div>  {{ __("Welcome") ." ". $userdata["name"]}} </div>
<br>

<div> {{__("My data")}}:</div>
<div>{{__("E-mail")." ". $userdata["email"]}}</div>

<br>


<form action="/logout" method="POST">
@csrf
    <button> {{__("Exit")}}</button>
</form>


</body>
</html>