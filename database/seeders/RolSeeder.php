<?php

namespace Database\Seeders;
use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Rol::factory(3)->create();

        $rol = new Rol();
        $rol-> descripcion = "Administrador";
        $rol->save();

        $rol = new Rol();
        $rol-> descripcion = "Asesor";
        $rol->save();

        $rol = new Rol();
        $rol-> descripcion = "Cliente";
        $rol->save();

        $rol = new Rol();
        $rol-> descripcion = "Super Usuario";
        $rol->save();
    }
}
