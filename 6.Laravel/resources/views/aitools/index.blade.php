@extends('layout')

@section('content')


<h1>Ai Eszközök


    <a href="{{route("aitools.create")}}" title="Új Ai eszköz">Új Ai eszköz létrehozása</a>
</h1>

@if (session('success'))
<div class alert alert-success>{{session("success")}}</div>  
@endif


    @foreach ( $aitools as $aitool)

<ul>
<li class="action">
            {{$aitool->name}}



            <a href="{{route("aitools.edit" ,$aitool->id)}}"  class="button">Szerkesztés</a>
            <a href="{{route("aitools.show" , $aitool->id)}}" class="button">Megjelenítés</a>
            <form action="{{route("aitools.destroy", $aitool->id)}}" method="post">
              @csrf
              @method("DELETE")  
              <button type="submit" class="danger" onclick="return confirm('Biztosan törli a kategóriát?')" >Törlés</button>
                
            </form>


        </li>
    
@endforeach





</ul>

    
@endsection