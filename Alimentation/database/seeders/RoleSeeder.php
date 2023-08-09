<?php

namespace Database\Seeders;

use App\Models\roles;
use Illuminate\Database\Seeder;
use Illuminate\support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        roles::create([
            'libele'=>'Administrateur',
        ]);
        roles::create([
            'libele'=>'Gerant',
           
        ]);
    }
}
