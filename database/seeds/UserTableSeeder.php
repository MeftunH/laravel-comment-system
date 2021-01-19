<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create(
        [
            'userid'=>'admin101',
            'role_id'=>1,
            'name'=>'Admin',
            'email'=>'admin1@gmail.com',
            'password'=>bcrypt('admin123'),
        ]);
        $user = User::create(
            [
                'userid'=>'user101',
                'role_id'=>1,
                'name'=>'User',
                'email'=>'newuser@gmail.com',
                'password'=>bcrypt('user123'),
            ]);
    }
}
