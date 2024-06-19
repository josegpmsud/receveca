<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user= new User();        

        $user->name= "Admin";
        $user->email= "admin@admin";
        $user->password= bcrypt("12345678");
        $user->id_rol= "1";

        $user->save();


        $user= new User();        

        $user->name= "Asesor";
        $user->email= "asesor@asesor";
        $user->password= bcrypt("12345678");
        $user->id_rol= "2";
        
        $user->save();
    }
}
