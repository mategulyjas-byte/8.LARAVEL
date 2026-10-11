@extends('layout')

@section('content')
    


<h1>{{$aitool->name}}</h1>


<h2>Kategória: {{$aitool->category->name}}</h2>
<p>{{$aitool->link}}</p>
<small>{{$aitool->price}}</small>




@endsection