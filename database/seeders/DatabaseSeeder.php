<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Exercise;
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
        User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        Exercise::factory(10)->create();
    }
}
