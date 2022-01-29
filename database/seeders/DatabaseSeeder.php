<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(1)->create(['email'=>'admin@docademi.com',
        'password'=>bcrypt('docademi')]);

        \App\Models\Asignatura::factory(10)->create();
    }
}
