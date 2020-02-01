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
        // $this->call(UsersTableSeeder::class);
        factory(App\Gym::class,15)->create();
        factory(App\Customer::class,60)->create();
        factory(App\Trainer::class,20)->create();

    }
}
