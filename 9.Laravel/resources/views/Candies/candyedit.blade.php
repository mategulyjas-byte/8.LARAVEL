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





 <form action="{{route('candy.update', $candy)}}"  method="POST">
@csrf
@method("PUT")

<input type="text" name="name" value="{{old("name", $candy->name)}}">


<select name="taste" id=""  value="{{old("taste", $candy->taste)}}" >

<option value="chocolate">{{__("chocolate")}}</option>
<option value="fruits">{{__("fruits")}}</option>
</select>


<select name="diet" id="">
<option value="lactosfree">{{__("lactosfree")}}</option>
<option value="vegan">{{__("vegan")}}</option>

</select>

<button>{{__("Update")}}</button>

 </form>


 <button> <a href="/profile">  {{__("Profile")}} </a></button>
<br>
 <button><a href="/candy"> {{__("Candy")}}  </a></button>
<br>
<button><a href="/candy/create"> {{__("Candy create")}}</a></button>
<br>


</body>
</html>
