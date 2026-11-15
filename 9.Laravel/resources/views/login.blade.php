<!DOCTYPE html>
<html lang="en"   >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    
  <h2> {{__("Login")}} </h2> 

  
 @if (Session::has("success"))
    <div>{{session("success")}}</div>
  
      
  @endif

<br>
    <form action="" method="POST">
        @csrf
     
        <label for="email">{{__("Give your email adress")}}</label>
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
       
        <button>{{__("Send")}}</button>
    </form>
    <br>
<button><a href="/forgottpass">{{__("Forgot password")}}</a></button>

    <br>
    <br>
<button><a href="/about">{{__("About")}}</a></button>
<br>
<br>
<button><a href="/welcome">{{__("Welcome")}}</a></button>
<br>
<br>
<button><a href="/register">{{__("Registration")}}</a></button>


    

</body>
</html>