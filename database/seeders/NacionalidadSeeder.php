<?php

namespace Database\Seeders;

use App\Models\Nacionalidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class NacionalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nacionalidads = [
            "V", // Venezolana
            "E", // Extrangero
            "J", // Juridico
            "G", // Gubernamental
            "P", // Pasaporte
        ];
        foreach ($nacionalidads as $nacionalidad) {
            Nacionalidad::create([
                'descripcion' => $nacionalidad,
            ]);

        }
    }

}
