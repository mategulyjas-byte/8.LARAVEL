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

      
    <h2>{{__("Cake registration")}}</h2>
<br>
<form action="{{route('Cakes.store')}}" method="POST">
@csrf

<label for="name">{{__("Give the cake name")}}</label>
<br>
<input type="text" name="name" id="name" value="{{old("name")}}">
<br>
@error('name')
    <div>{{$message}}</div>
@enderror

<br>

<label for="tast">{{__("Give the cake taste")}}</label>
<select name="taste" id="taste">
<option value="choclate">  {{__("chocolate")}}</option>
<option value="appple">   {{__("apple")}}</option>
<option value="grape"> {{__("grape")}}</option>
<option value="orange">{{__("orange")}}</option>


</select>

<label for="tast">{{__("Give the cake taste")}}</label>
<select name="taste" id="taste">
<option value="vegan">  {{__("vegan")}}</option>
<option value="lactorsfree">   {{__("lactosfree")}}</option>
<option value="with nus"> {{__("with nus")}}</option>
<option value="with milk">{{__("with milk")}}</option>

</select>


<select name="taste" id="taste">
<option value="vegan">  {{__("vegan")}}</option>
<option value="lactorsfree">   {{__("lactosfree")}}</option>

</select>


<input type="checkbox" name="available" id="">





    </form>


</body>
</html>