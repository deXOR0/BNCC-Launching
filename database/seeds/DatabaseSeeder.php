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
        $this->call(ScheduleSeeder::class);
        $this->call(UserSeeder::class);

        /* Disable this in server */
        // $this->call(TestSeeder::class);
    }
}
