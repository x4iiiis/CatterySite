<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dev = User::create([
            'name' => "Ryan O'Flaherty",
            'email' => 'ryan@x4iiiis.com',
            'password' => bcrypt('devdevdev'),
        ]);
        $dev->assignRole('Developer');    
        
        $admin = User::create([
            'name' => "Zoe O'Flaherty",
            'email' => 'zoe_o_f@hotmail.co.uk',
            'password' => bcrypt('adminadmin'),
        ]);
        $admin->assignRole('Administrator');    
    }
}
