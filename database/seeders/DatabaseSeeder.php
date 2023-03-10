<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Presence;
use App\Models\Role;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Role::create([
            'title' => 'admin',
        ]);

        Role::create([
            'title' => 'user',
        ]);

        Employee::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'role_id' => 1,
            'last_check_in' => now(),
            'last_check_out'=> now(),
            'present' => true,
            'active' => true,
        ]);

        Employee::factory(15)->create();

        Presence::factory(100)->create();
    }
}
