<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
    

<h2>{{__("Changing data")}}</h2>

@if ($errors->any())
<div>{{__("Fill out the form correctly!")}}</div>
    
@endif

 <form action="" method="POST">
        @csrf
        <label for="name">{{__("Give your name")}}</label>
        <br>
        <input type="text" name="name" id="name" placeholder="{{__("John Doe")}}"  value="{{old("name") ?? Auth::user()->name}}">
        <br>
        @error('name')
        <div>{{$message}}</div>       
        @enderror

        <br>
        <label for="name">{{__("Give your email adress")}}</label>
        <br>
        <input type="email" name="email" id="email" placeholder="exaple@exaple.hu" value="{{old("email") ?? Auth::user()->email}}">
        <br>
        @error('email')
        <div>{{$message}}</div>    
        @enderror

      
        <button>{{__("Changing")}}</button>
    </form>





</body>
</html>