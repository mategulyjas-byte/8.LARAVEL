<!DOCTYPE html>
<html lang="en" data-bs-theme="{{session()->get("colorstyle")}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">

    <title>{{__($title)}}</title>
</head>
<body>
    
   <h2>{{__("About")}}</h2> 

<p>
{{__("Our company was founded with the mission to bring the sweetest symbol of Hungarian Christmas traditions, szaloncukor, directly into your home. Alongside classic, nostalgic flavors, our selection features award-winning specialties from the finest local artisan workshops, crafted with real Belgian chocolate and premium ingredients. For us, szaloncukor is more than just a sweet treat; it is an essential part of holiday preparations and cherished family moments. Browse our delicacies and make this Christmas truly unforgettable!")}}
</p>

<br>
<button><a href="/">{{__("Welcome")}}</a></button>
<br>
<br>
<button><a href="/register">{{__("Registration")}}</a></button>
<br>
<br>
<button><a href="/login">{{__("Login")}}</a></button>





</body>
</html>