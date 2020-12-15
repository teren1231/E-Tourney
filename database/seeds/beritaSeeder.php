<?php

use Illuminate\Database\Seeder;

class beritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beritas')->insert(['game_id' => '1' , 'day' => 'senin' , 'round' => '17' , 'bestOf' => '6' , 'map' => 'jembatan']);
        DB::table('beritas')->insert(['game_id' => '2' , 'day' => 'selasa' , 'round' => '117' , 'bestOf' => '6' , 'map' => 'pohon']);
        
    }
}
