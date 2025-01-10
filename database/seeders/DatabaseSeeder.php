<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->password = Hash::make('123456789');
        $user->email = 'D1114182008@admin.com';
        $user->name = 'Admin';
        $user->role = User::ROLE_ADMIN; 
        $user->save();

        $user = new User();
        $user->password = Hash::make('123456789');
        $user->email = 'D1114182008@manager.com';
        $user->role = User::ROLE_MANAGER; 
        $user->name = 'Manager';
        $user->save();

        $user = new User();
        $user->password = Hash::make('123456789');
        $user->email = 'D1114182008@user.com';
        $user->role = User::ROLE_USER; 
        $user->name = 'User';
        $user->save();
        
        $this->call(ProjectDetailsTableSeeder::class);
    }
}
