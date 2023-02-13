<?php

namespace Database\Seeders;

use App\Models\User_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class User_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_type1 = new User_type;
        $user_type1->name = 'Admin';
        $user_type1->save();
        $user_type2 = new User_type;
        $user_type2->name = 'Cajero';
        $user_type2->save();
        $user_type3 = new User_type;
        $user_type3->name = 'Almacen';
        $user_type3->save();
    }
}
