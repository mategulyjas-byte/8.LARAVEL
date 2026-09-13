<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

//$list = file_get_contents("https://jsonplaceholder.typicode.com/users");
//print_r ($list);

//$list = file_get_contents("https://jsonplaceholder.typicode.com/users");
//dd($list);

// $list = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users"));
// dd($list);



// $list = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users"));


//     return view('welcome', ["listaablédnek"=>$list]);
// });




// $list = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users"));

//     return view('welcome', ["listaablédnek"=>$list, "cím"=>"JSONplaceholderek"]);
// });



// $list = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users"));

// $első="Elsőváltozó";
// $második="Másodikváltozó"


//     return view('welcome', ["listaablédnek"=>$list, "cím"=>"JSONplaceholderek", "első"=>$első, "második=>$második"]);
// });

$list = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users"));


$listaablédnek = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/users"));
$cím= "JSONplaceholderek";
$első="Elsőváltozó";
$második="Másodikváltozó";


    return view('welcome', compact("listaablédnek","cím","első","második") );
});






Route::post('/',function(){

dd($_POST);

});



Route::get('/rolunk',function(){

return view('rolunk');});















Route::get("/json", function(){return view("json");});


 Route::get('/view/api', function () {
    return view('api');
});
