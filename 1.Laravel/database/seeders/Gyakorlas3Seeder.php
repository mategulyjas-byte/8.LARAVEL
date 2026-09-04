<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <--- Ezt a sort mindenképpen add hozzá!


class Gyakorlas3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gyakorlas3')->insert([
            ['nev'=>'Kati', 'ev'=>40, 'telepules'=>'Kalocsa', "email"=>"mate@mate.hu"],
            ['nev'=>'Gergo', 'ev'=>4,  'telepules'=>'Kalocsa',"email"=>"mate@mate.hu"],
            ['nev'=>'Bence', 'ev'=>42, 'telepules'=>'Kalocsa', "email"=>"mate@mate.hu"],
            ['nev'=>'Angéla', 'ev'=>30, 'telepules'=>'Kalocsa', "email"=>"mate@mate.hu"]
        ]);
    }
}
