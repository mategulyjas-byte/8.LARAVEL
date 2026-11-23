<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    

    protected $table = 'foods';

function category(){

return $this->belongsTo(Category::class);
}

    protected $guarded = [];
}
