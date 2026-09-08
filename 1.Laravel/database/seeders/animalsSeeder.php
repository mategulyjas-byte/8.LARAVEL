<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Animal;

class animalsSeeder extends Seeder
{
    public function run(): void
    {
        
Animal::create([
    "name"=>"Macska",
    "haziallat"=>true
]);

Animal::create([
    "name"=>"Oroszlán",
    "haziallat"=>false
    ]);
    }
}
