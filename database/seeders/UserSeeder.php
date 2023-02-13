<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'rfreyrebrayaned';
        $user->email = 'rfreyrebrayaned@gmail.com';
        $user->password =bcrypt('123456789');
        $user->email_verified_at =now();
        $user->user_types_id =1;
        $user->employees_id =1;
        $user->save();
        User::factory(20)->create();
    }
}
