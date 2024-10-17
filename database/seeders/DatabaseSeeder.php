<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //create admin user
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@simplibill.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin@123'),
            'remember_token' => Str::random(10)
        ]);

        $this->call(PostSeeder::class);
    }
}
