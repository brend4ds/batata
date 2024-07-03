<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimaisSeeder extends Seeder
{
           public function run():void{
            DB::table('animais')->insert([
                [
                    'nome' => 'Sarah anta',
                    'idade' => '17'
                ],
                [
                    'nome' => 'Emili jumenta',
                    'idade' => '18'
                ]
            ]);
        }
    
}
