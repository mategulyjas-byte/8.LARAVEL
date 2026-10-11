
@extends('layout')

@section('content')
    

<h1>Új kategória</h1>

<form action="{{route ("categories.store") }}"  method="post">


    @error('name')
   <div class="alert alert-warning"> {{$message}} <div></div>
        
    @enderror
@csrf
<fieldset>

    <label for="name">Kategória név</label>
    <input type="text" name="name" id="name">
</fieldset>
<button type="submit"> Ment</button>
     
</form>

@endsection

