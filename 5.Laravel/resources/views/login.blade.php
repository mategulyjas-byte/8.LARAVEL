<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__("Login form")}}</title>
</head>
<body>
    

@if (Session::has("error"))
   {{ Session::get("error")}}

    
@endif

@if (Session::has("success"))
{{session::get("success")}}
    
@endif



<br>

{{__("Login form")}}
<br>
<br>

<form action="" method="POST">
@csrf
<label for="email">{{__("Please enter your email address")}}</label>
<br>
<input type="email" name="email" id="email" value="{{old("email")}}">
<br>

<label for="password">{{__("Please enter your password")}}</label>
<br>
<input type="password" name="password" id="password">
<br>

<input type="checkbox" name="remember"> {{__("Note")}}

<br>
<button>  {{__("Send")}}</button>

</form>


<br>
<button><a href="/">{{__("Go to Introduction Page")}}</a></button>






</body>
</html>