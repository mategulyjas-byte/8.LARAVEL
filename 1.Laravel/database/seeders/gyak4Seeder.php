<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class gyak4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("_gyak4")->insert([


        "name" => "Angéla",
        "email"=>"angimenta@nhely.hu",
        "password"=>"jelszó123",
        ]);
    }
}
