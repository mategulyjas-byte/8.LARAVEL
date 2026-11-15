<!DOCTYPE html>
<html lang="en"  data-bs-theme="{{session()->get("colorstyle")}}">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">

</head>
<body>
   <h1>{{__("Hungarian Christmas candy fair")}}</h1>
   <br> 

<button><a href="/hu">{{__("Hungary")}}</a></button>
<br>
<button><a href="/en">{{__("English")}}</a></button>
<br>
<br>
<button><a href="/dark">{{__("Dark mode")}}</a></button>
<br>
<button><a href="light">{{__("Light mode")}}</a></button>

<br>

   <h2>{{__("Welcome")}}</h2> 

    <br>

   <h3>{{__("The Essential Jewel of Christmas: Premium Hungarian Szaloncukor in One Place")}}</h3>
   <br>
<p>
{{__("The Essential Jewel of Christmas: Premium Hungarian Szaloncukor in One Place Szaloncukor is the sweetest symbol of Hungarian Christmas traditions, decorating Christmas trees and bringing magic to festive moments for over a  century. Alongside classic, nostalgic flavors, our selection features award-winning specialties from the finest local artisan workshops, crafted with real Belgian chocolate and premium ingredients. Browse our delicacies for your holiday table or as a thoughtful gift, and make this Christmas truly unforgettable!")}}
</p>



<button><a href="/about">{{__("About")}}</a></button>
<br>
<br>
<button><a href="/register">{{__("Registration")}}</a></button>
<br>
<br>
<button><a href="/login">{{__("Login")}}</a></button>



<br><br><br>
<hr>

<h4>{{__("Reviews about us")}}</h4>


@foreach ($comments as $comment)
    
<li>{{$comment->id. "- " .$comment->body}}</li> <hr>

    
@endforeach

</body>
</html>