<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Helló</h1>


<?php
print date("Y-m-d H:i:s");
print "<br>";
print date("Y-m-d H:i:s", strtotime("-1 day"));
print "<br>";
print "<hr>";
?>

@php    
print date("Y-m-d H:i:s");
print "<br>";
print date("Y-m-d H:i:s", strtotime("-1 day"));
print "<br>";
print "<hr>"

@endphp

{{date("Y-m-d H:i:s")}}
<br>
{{ date("Y-m-d H:i:s", strtotime("-1 day"))}}

@php

    print "<br> <hr>";
@endphp

@for ($i = 0; $i <3; $i++)
    {{$i}}<hr>
@endfor

{{-- php artisan view:clear --}}
 {{-- php artisan route:list           útvonalakat adja ki -get vagy post az adott általunk elkésztette file--}}







 @php
     $title= '<h1> Helló </h1>';
 @endphp
{{$title}}
<br>
<br>
 @php
     $title2= '<h1> vírus() </h1>';
 @endphp
{{$title2}}
<br>

 @php
     $title2= '<h1> Nem vírus</h1>';
 @endphp
{!! $title2 !!}
 <br>

 <?php 
      $title3= '<h1> sima HTML</h1>';
print htmlentities($title3)."<br><br>";
 
 ?>

{{-- @dd($listaablédnek) --}}


@foreach ($listaablédnek as $item)
    <li>{{$item->name}}</li>
@endforeach


<h2>{{$cím}}<h3>

<h2>{{$első}}</h2>
<h2>{{$második}}</h2>





    <h2>Regisztráció</h2>


{{-- {{csrf_token()}} --}}


    <form action="" method="post">

@csrf
{{--  cros site request forgery--}}
<input type="text" name="name"  placeholder="írd ide a neved">
<br>
<input type="email" name="email"  placeholder="add meg az email címed">

{{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}

<button>Küldés</button>


    </form>








</body>
</html>