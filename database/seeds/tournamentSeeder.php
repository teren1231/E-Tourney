<?php

use Illuminate\Database\Seeder;

class tournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('tournaments')->insert(['game_id' => '1', 'photo' => 'asset/Tournament PUBG.png' ]);
        DB::table('tournaments')->insert(['game_id' => '2' , 'photo' => 'asset/TournamentAPEX.png' ]);
        
    }
}
