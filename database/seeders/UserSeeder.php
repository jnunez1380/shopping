<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Disable foreign key checking
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Enable foreign key checking
        User::factory()->count(10)->create();
    }
}