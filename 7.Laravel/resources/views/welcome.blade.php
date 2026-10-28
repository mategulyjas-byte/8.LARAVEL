<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    
@for ($i = 0; $i < 6; $i++)

{{$i }}<hr>
@endfor


<h1>{{"Cím"}}</h1>
<br>

{!!"Cím"!!}
<br>

@php
    $cím="<h1>ez egy cím</h1>"
@endphp


{{$cím}}
<br>
{!!$cím!!}




@php
    $list=file_get_contents("https://jsonplaceholder.typicode.com/users")
@endphp

{{$list}}
<br>
<br>

@php
  print_r($list)  
@endphp


<br><br>

@php
    dump($list)
@endphp
<br><br>

@php
    $list2=json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users"));

dump($list2)
   
@endphp

{{$list}}


@foreach ($list2 as $user)
<li>{{$user->name}} <br> {{$user->email}}</li>  <br>  
@endforeach
<br><br>
<br> <br>
 

@php


   dump(date('Y-m-d H:i:s'));

   $dtime = date("Y-m-d H:i:s");

$timeminus = date("Y-m-d H:i:s", strtotime("-1 hour"))

@endphp

{{$dtime}}
<br>
{{$timeminus}}

<br>
{{ "neve:".$name}}
<br>
{{"Életkora {$age} év"}}
<br>



</body>
</html>