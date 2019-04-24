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
	 $this->call(UsertypeSeed::class);
     $this->call(UsersSeed::class);
     $this->call(SekolahSeed::class);
    }
}
