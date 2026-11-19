<!DOCTYPE html>
<html lang="en"    data-bs-theme="{{session()->get("colorstyle")}} " >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>

<h2>{{__("Profile")}}</h2>


@if (Session::has("success"))
<div>{{Session::get("success")}}</div>
    
@endif

<h3>{{__("My data:")}}</h3>


<li>{{__("Name: ").Auth::user()->name}}</li>
<li>{{__("Email: ").Auth::user()->email}}</li>

<br>

<button><a href="/logout">{{__("Logout")}}</a></button>
<br>
<br>
<button><a href="/changingdata">{{__("Changing data")}}</a></button>
<br>
<br>
<button><a href="/candy/create">{{__("Candy create")}}</a></button>
<button><a href="/candy">{{__("Candies ")}}</a></button>
<br>
<br>
<button><a href="/delete">{{__("Delete my profile")}}</a></button>


</body>
</html>