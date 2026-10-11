<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ai eszközök listája</title>

     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Quicksand&display=swap" rel="stylesheet">


<link rel="shortcut icon" href="{{asset("favicon.ico")}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset("style.css")}}">
</head>
<body>
    



<header>

    <img src="{{asset("logo.png")}}" alt="">
    <nav>

        <li> <a href="{{route("aitools.index")}}">Ai eszközök</a></li>
            <li> <a href="{{route("categories.index")}}">Kategóriák</a></li>
            <li><a href="{{route("categories.create")}}">Új kategóriák</a></li>

    </nav>
</header>
<main>
@yield('content')
</main>
<footer>

    2026.Gyakorlás
</footer>



</body>
</html>