<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aitool extends Model
{


protected $fillable = [

"name",
"category_id",
"description",
"link",
"hasfreeplan",
"price",
];







    public function category()
    { return $this->belongsTo(Category::class);}
}


