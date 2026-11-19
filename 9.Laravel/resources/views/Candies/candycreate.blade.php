<!DOCTYPE html>
<html lang="en"   data-bs-theme="{{session()->get("colorstyle")}} ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">


</head>
<body>
<br>

<h2>{{__("Candies")}}</h2>
<br>
<form action="{{route('candy.store')}}" method="POST">
@csrf


<Label>{{__("Give the Candy name")}}</Label>
<br>
<input type="text" name="name" id="name">
<br>
@error('name')
<div>{{$message}}</div>  
@enderror
<br>

<label for="taste">{{__("Choose the flavor")}}</label>
<br>
<select name="taste" id="taste">
<option value="chocolate">{{__("chocolate")}}</option>
<option value="fruits">{{__("fruits")}}</option>
</select>
<br>
@error('taste')
<div>{{$message}}</div>    
@enderror

<br>
<label for="diet">{{__("Choose the diet")}}</label>
<br>
<select name="diet" id="diet">
<option value="lactosfree">{{__("lactosfree")}}</option>
<option value="vegan">{{__("vegan")}}</option>
<br>
</select>
@error('diet')
<div>{{$message}}</div>    
@enderror
<br><br>


<button>{{__("Send")}}</button>
</form>

<br>


<button><a href="/profile">{{__("Profile")}}</a></button>
 <br>
 <br>
 <button><a href="/candy">{{__("Candies")}}</a></button>
   
</body>
</html>
