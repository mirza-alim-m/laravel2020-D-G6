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
        $this->call(RuangsSeed::class);
        $this->call(DosensSeeder::class);
        $this->call(MKSeed::class);
    }
}
