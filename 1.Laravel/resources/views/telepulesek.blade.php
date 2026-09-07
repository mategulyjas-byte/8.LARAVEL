<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Települések</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <h2>Települések</h2>


<table class="table table-striped table-bordered" style="max-width: 600px; margin: 0 auto;">
    

<tr>
<th>Település neve</th>
<th>Népességszám</th>
<th>Nagyváros</th>


@foreach($telepulesek as $telepules)
<tr>
<td>{{$telepules->city}}</td>
<td>{{$telepules->population}}</td>
<td>{{$telepules->bigcity ? "igen" : "nem"}}</td>


</tr>
@endforeach

</tr>
</th>
</table>

<br>


<form action="/telepulesek/mentes" method="POST">
    @csrf 

    <label>Település neve:</label>
    <input type="text" name="city" required>

    <label>Népességszám:</label>
    <input type="number" name="population" required>

    <label>Nagyváros?</label>
    <select name="bigcity">
        <option value="0">nem</option>
        <option value="1">igen</option>
    </select>

    <button type="submit">Mentés</button>
</form>


</body>
</html>