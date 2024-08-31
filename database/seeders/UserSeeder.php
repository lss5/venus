<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('1234'),
            'email_verified_at' => Carbon::now(),
        ]);

        $adminRole = Role::where('uniq_name', 'admin')->first();
        $admin->roles()->attach($adminRole);

        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('1234'),
            'email_verified_at' => Carbon::now(),
        ]);
    }
}
