<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cars::class, 50)->create()->each(function ($u) {
            // $u->cars()->save(factory(\App\cars::class)->make());
        });
    }
}
