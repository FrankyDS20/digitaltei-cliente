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

/**
function convertNameToCode($fullName)
{
    $parts = explode(" ", $fullName);
    if($parts.length==4){
    $firstLetterOfFirstName =substr($parts[2], 0, 1);
    $secondLastName = $parts[3];
    $firstTwoLettersOfSecondName = substr($parts[1], 0, 2);
    $code= $firstLetterOfFirstName . $secondLastName . $parts[0] . $firstTwoLettersOfSecondName;
    return strtolower($code);
    }else{
    $firstLetterOfFirstName =substr($parts[1], 0, 1);
    $secondLastName = $parts[2];
    $firstTwoLettersOfSecondName = '';
    $code= $firstLetterOfFirstName . $secondLastName . $parts[0] . $firstTwoLettersOfSecondName;
    return strtolower($code);
    }
}
// Ejemplo de uso

$fullName = "Brayan Rojas Freyre";
$code = convertNameToCode($fullName); 

*/