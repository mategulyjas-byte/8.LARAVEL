<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    
  <h2> {{__("Registration")}} </h2> 


  @if (Session::has("success")){
    <div>{{session("success")}}</div>
  }
      
  @endif
<br>
    <form action="" method="POST">
        @csrf
        <label for="name">{{__("Give your name")}}</label>
        <br>
        <input type="text" name="name" id="name" placeholder="{{__("John Doe")}}"  value="{{old("name")}}">
        <br>
        @error('name')
        <div>{{$messege}}</div>       
        @enderror
        <br>
        <label for="name">{{__("Give your email adress")}}</label>
        <br>
        <input type="email" name="email" id="email" placeholder="exaple@exaple.hu" value="{{old("email")}}">
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
        <button>{{__("Send")}}</button>
    </form>


</body>
</html>