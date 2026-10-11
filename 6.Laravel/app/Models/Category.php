<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function aitools(){
return $this->hasMany(Aitool::class);

    }
}
