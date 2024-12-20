<?php

namespace Database\Seeders;

use App\Models\student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([
        //     StudentSeeder::class
        // ]);

        //factory
        // student::factory()->count(10)->create();
        student::factory(5)->create();    //php artisan migrate:fresh --seed
    }
}
