<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
             'name' => 'someuser',
             'email' => 'someuser@example.com',
             'password' => '1234567890'
         ]);
        }

    public function runAdmin(): void
    {
        \App\Models\Admin::factory(10)->create();

        \App\Models\Admin::factory()->create([
             'name' => 'reo',
             'email' => 'reotry@example.com',
             'password' => '1234567890'
         ]);
    }

}
