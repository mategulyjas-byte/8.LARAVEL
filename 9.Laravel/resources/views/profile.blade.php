<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    

@if (Session::has("success"))
<div>{{Session::get("success")}}</div>
    
@endif


{{Auth::user()->name}}

<br>

<a href="/logout">{{__("Logout")}}</a>

<a href="/changingdata">{{__("Changing data")}}</a>


</body>
</html>