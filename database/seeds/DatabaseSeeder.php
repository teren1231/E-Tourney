<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(gameSeeder::class);
        $this->call(tournamentSeeder::class);
        $this->call(beritaSeeder::class);
    }
}
