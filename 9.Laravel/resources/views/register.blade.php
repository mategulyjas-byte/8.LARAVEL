<!DOCTYPE html>
<html lang="en"   data-bs-theme="{{session()->get("colorstyle")}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">



    
</head>
<body>
    
  <h2>{{__("Registration")}} </h2> 

  @if (Session::has("success"))
    <div>{{session("success")}}</div>
  
      
  @endif
<br>
    <form action="" method="POST">
        @csrf
        <label for="name">{{__("Give your name")}}</label>
        <br>
        <input type="text" name="name" id="name" placeholder="{{__("John Doe")}}"  value="{{old("name")}}">
        <br>
        @error('name')
        <div>{{$message}}</div>       
        @enderror
        <br>
        <label for="name">{{__("Give your email adress")}}</label>
        <br>
        <input type="email" name="email" id="email" placeholder="{{__("exaple@exaple.com")}}" value="{{old("email")}}">
        <br>
        @error('email')
        <div>{{$message}}</div>    
        @enderror

        <br>
        <label for="paasword">{{__("Give your password")}}</label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        @error('password')
            <div>{{$message}}</div>
        @enderror
        <br>
        <label for="password_confirmation">{{__("Confrimed your password")}}</label>
        <br>
        <input type="password" name="password_confirmation" id="password_confrimation">
        <br>
        <br>
        <button>{{__("Send")}}</button>
    </form>

<br>
<br>
<button><a href="/about">{{__("About")}}</a></button>
<br>
<br>
<button><a href="/welcome">{{__("Welcome")}}</a></button>
<br>
<br>
<button><a href="/login">{{__("Login")}}</a></button>



</body>
</html>