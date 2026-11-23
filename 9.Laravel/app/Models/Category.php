<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function foods(){
        return $this->hasMany(Food::class);
    }


    protected $guarded = [];
}
