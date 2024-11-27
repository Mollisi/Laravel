<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'test user',
                'email' => 's@nwk.co.za',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'test user 2',
                'email' => 'k@nwk.co.za',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'test user 3',
                'email' => 'p@nwk.co.za',
                'password' => Hash::make('password'),
            ],
        ];
        foreach ($users as $users)
            User::factory()->create($users);
        // User::factory()->create([
        // 'name'=>'test user',
        // 'email'=>'test email',
        // 'password'=> Hash::make('password'),
        // ]);
        // User::factory()->count(1)->create();
    }
}
