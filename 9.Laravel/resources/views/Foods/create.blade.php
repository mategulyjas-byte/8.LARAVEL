<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="{{route("Foods.store")}}" method="POST">
@csrf

<label for="food_name">Food name</label>
<input type="text" name="food_name" id="foodname">


<label for="category_id"> Cageory id</label>
<select name="category_id" id="category_id">

@foreach ($categories as $category)

<option value="{{$category->id}}"> {{$category->category}}</option>
@endforeach


</select>

<button>Küldés</button>
</form>

</body>
</html>