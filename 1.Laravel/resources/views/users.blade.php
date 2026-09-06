<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>USers</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <h1 style="color:red">A felhasználók adatai </h1>
    <br>
   
    <a href="/">Vissza a főoldalra</a>
<br>



        <table class="table table-striped table-bordered" style="width:500px; margin: 0 auto;">
        <tr>
            <th>Név</th>
            <th>e-amil cím</th>
            <th>jelszó</th>
        </tr>
        @foreach($emberek as $ember)
        <tr>
            <td>{{ $ember->name }}</td>
            <td>{{ $ember->email }} év</td>
            <td>{{ $ember->password }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>

