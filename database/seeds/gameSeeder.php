<?php

use Illuminate\Database\Seeder;

class gameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert(['name' => 'PUBG' , 'description' => 'ini game tembak tembakan' , 'photo' => 'asset/pubg.png' ]);
        DB::table('games')->insert(['name' => 'APEX' , 'description' => 'ini game ' , 'photo' => 'asset/apex.png' ]);
        DB::table('games')->insert(['name' => 'Valorant' , 'description' => 'ini game tembakan' , 'photo' => 'asset/valorant.png' ]);
    }
}
