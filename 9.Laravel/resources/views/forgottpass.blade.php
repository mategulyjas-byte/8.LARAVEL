<!DOCTYPE html>
<html lang="en"  data-bs-theme="{{session()->get("colorstyle")}} "   >
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
<br>
<button><a href="/about">{{__("About")}}</a></button>
<br>
<br>
<button><a href="/welcome">{{__("Welcome")}}</a></button>
<br>
<br>
<button><a href="/register">{{__("Registration")}}</a></button>
<br>
<br>
<button><a href="/login">{{__("Login")}}</a></button>

    


</body>
</html>