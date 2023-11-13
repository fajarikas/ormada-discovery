<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // if (config('admin.admin_name')) {
        //     User::firstOrCreate([
        //         'name' => config('admin.admin_name'),
        //         'email' => config('admin.admin_email'),
        //         'password' => bcrypt(config('admin.admin_password')),
        //     ]);
        // }
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
        ]);
        $user->roles()->attach(1);
    }
}
