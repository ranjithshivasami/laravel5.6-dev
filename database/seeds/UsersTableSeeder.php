<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Ranjith Shivasami',
            'email' => 'ranjith@gmail.com',
            'password' => bcrypt('admin@123'),
            'admin' => 1
        ]);
        
        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatar/1.png',
            'about' => 'dbkjasd kjhkjd kjhkjd khkjdakjkjh dahkjh dakjhkjhd ahkjhdakjhkjdakjhdsakhkjdhsa',
            'facebook' => 'www.facebook.com',
            'youtube' => 'www.youtube.com'
        ]);
    }
}
