<?php

namespace Database\Seeders;

use App\Models\Gym;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::factory()->create([
            'name' => 'Albert',
            'email' => 'albert@test.com',
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
        ]);

        $gym = Gym::create([
            'name' => 'Gym 1',
            'address' => '123 Main St',
            'phone' => '555-555-5555',
            'email' => 'gym1@test,com',
            'website' => 'http://gym1.test.com',
            'user_id' => $user1->id,
        ]);
    }
}
