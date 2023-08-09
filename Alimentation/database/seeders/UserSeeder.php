<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname'=>'Zorome',
            'lastname'=>'Faozia',
            'email'=> Str::random(4).'@gmail.com',
            'password'=>bcrypt('pass123'),
            'role_id'=>1,
        ]);
       
       
    }
}
