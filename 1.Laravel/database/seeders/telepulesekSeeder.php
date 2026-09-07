<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class telepulesekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table("telepulesek")->insert([
       ["created_at"=>now(), "updated_at"=>now(), "city"=>"Szekszárd","population"=>20000,"bigcity"=>false, ], 
        ["created_at"=>now(), "updated_at"=>now(), "city"=>"Pécs","population"=>100000,"bigcity"=>true],
               ["created_at"=>now(), "updated_at"=>now(), "city"=>"Kecskemét","population"=>10000,"bigcity"=>true],

        ]); 



    }
}
