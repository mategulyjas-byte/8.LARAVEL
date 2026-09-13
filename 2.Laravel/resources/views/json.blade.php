<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div id="b" style="border:4px solid brown"></div>
<div id="a" style=" border:2px solid red"></div>


<?php
print "<div id='egy' style='border:2px solid black'>";

print "sima php  tömb, print_r el kííratva";
print "<br>";
$tömb1=["alma", "körte"];
print_r ($tömb1);
print "<hr>";


print "php tömb json szöveggé alkítva";
print "<br>";
$tömb2=["macska","kutya"];
$jsonszövegPHP=json_encode($tömb2);
print $jsonszövegPHP;
print "<hr>";


print "jsonszöveg php tömbbé alakítva";
print "<br>";
$Phptömb=json_decode($jsonszövegPHP);
print_r ($Phptömb);
print "<hr>";

print "</div>";

?>


<script>

let tömbjs=["Suzuki","Audi"];


document.getElementById("a").innerHTML+="EZ egy JS tömb simán kííratva <br>";
document.getElementById("a").innerHTML+=tömbjs+"<hr>";


document.getElementById("a").innerHTML+="JS tömb átalakítva JSON strinngé <br>";
document.getElementById("a").innerHTML+= jsonszöveg= JSON.stringify(tömbjs)+"<hr>";


document.getElementById("a").innerHTML+="json string átalakítva tömbbé Js-ben <br>";
let jsonszöveg2=JSON.stringify(tömbjs);
document.getElementById("a").innerHTML+= jstömb=JSON.parse(jsonszöveg2)+"<hr>";




fetch("/view/api")
.then(function(szöveg){return szöveg.json()})
.then(function (márjstömb){document.getElementById("b").innerHTML+=
"fetchelt kivülről jütt PHP ból jött strig átalakítva js tömbbé <br>" +   márjstömb +"<hr>"});



fetch("/view/api")
.then(function(jsonszöveg){return jsonszöveg.text()})
.then(function(maradjsonszöveg){ document.getElementById("b").innerHTML+=
 "fetchelt kivülről jütt PHP ból jött strig és az is marad <br>"   + maradjsonszöveg+"<hr>"});
;

</script>


</body>
</html>