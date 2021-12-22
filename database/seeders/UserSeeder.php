<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'email' => 'admin@shop.com',
            'name'  =>  'admin',
            'password'  =>  Hash::make('adminadmin'),
        ]);
        $user1->assignRole('admin');
        $user2 = User::create([
            'email' => 'user@shop.com',
            'name'  =>  'user',
            'password'  =>  Hash::make('useruser'),
        ]);
        $user2->assignRole('admin');
    }
}
