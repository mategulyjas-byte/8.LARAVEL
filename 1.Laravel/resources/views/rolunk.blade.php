<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Rólunk</title>


</head>
<body>
    <h1 style="color:red">Ez a hivatalos Rólunk oldalunk!</h1>
    <p>Itt már kedvedre használhatsz HTML elemeket, CSS-t és formázásokat.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quasi quam sint iusto amet, ullam voluptatum eligendi ipsam modi minima vitae officia facere nemo magni exercitationem quidem tenetur ratione. Officiis.
    </p>
    <a href="/">Vissza a főoldalra</a>




        <table>
        <tr>
            <th>Név</th>
            <th>Életkor</th>
            <th>Város</th>
            <th>E-mail</th> <!-- Új fejléc -->
        </tr>
        @foreach($emberek as $ember)
        <tr>
            <td>{{ $ember->nev }}</td>
            <td>{{ $ember->ev }} év</td>
            <td>{{ $ember->telepules }}</td>
            <td>{{ $ember->email }}</td> <!-- Új adatcella -->
        </tr>
        @endforeach
    </table>

</body>
</html>

