<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? __('uuu')}}</title>

    <link rel="shortcut icon" href="{{asset('favicon.png')}}" >


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("style.css")}}">

</head>


<body>
    
<header>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
             <img  id="logo1" src="{{asset("logo.png")}}" alt="">

  <div class="container-fluid">


    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<div class="mainaside">


    <aside>

<ul>
1. Lelki egyensúly és belső erőforrások
</ul>
<ul>
2. Munkahelyi jóllét és megelőzés
</ul>
<ul>
3. Kapcsolatok és támogatás
</ul>

<ul>
4. Pozitív érzelmek és szemlélet
</ul>

    </aside>
<main>

@yield('content1')
</main>


</div>



<footer>

                       <div>Támogatás a lelki egyensúlyért és a tudatos mindennapokért.</div> 
                       <div>  Mészáros Angéla munkahelyi mentálhigiénés szakember </div>
                       <div> Kapcsolat: <ul>mamental@gmail.com</ul>
                                        <ul> Telefon: 7+367777777</ul>
                        </div>
</footer>




        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js" integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous"></script> --}}
</body>
</html>