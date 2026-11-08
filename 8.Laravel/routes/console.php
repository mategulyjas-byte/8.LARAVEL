<?php

use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');




Artisan::command('delete-old-registration', function () {

foreach(User::whereNull("email_verified_at")->get() as $user){

  $mindate= date("Y-m-d H:i:s", strtotime("-1 min" ))
;};


if($user->created_at < $mindate){
    $user->delete();
    print $user->name;
}


;});