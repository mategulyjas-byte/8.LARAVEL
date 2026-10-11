
@extends('layout')

@section('content')
    

<h1>Új Ai eszközöök</h1>

<form action="{{route ("aitools.store") }}"  method="post">

{{-- 
    @error('name')
   <div class="alert alert-warning"> {{$message}} </div>   
    @enderror --}}


@if ($errors->any())
    <div class="alert"><ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach


    </ul>
    </div>
@endif





@csrf
<fieldset>

    <label for="name">Ai eszköz neve</label>
    <input type="text" name="name" id="name">
</fieldset>


<fieldset>

    <label for="category_id">Kategória</label>
    <select name="category_id" id="category_id">

        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
            
        @endforeach

    </select>
</fieldset>










<fieldset>

    <label for="description">Leírás</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea> 
</fieldset>


<fieldset>

    <label for="link">Link</label>
    <input type="text" name="link"  id="link">
</fieldset>







<fieldset>

    <label for="price">Havonta fizetendő</label>
    <input type="number" name="price"  id="price">
</fieldset>


<button type="submit"> Ment</button>
     
</form>

@endsection

