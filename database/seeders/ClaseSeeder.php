<?php

namespace Database\Seeders;

use App\Models\Clase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //Clase::factory(10)->create();
        $clases = [
            "Camioneta",
            "Carrito",
            "Camion",
            "Microbus",
            "Exprexo",
            "Moto", 
            "Patineta",
            "Bicicleta",
            "Grua", 
            "Contenedor",           
        ];

        foreach ($clases as $clase) {
            Clase::create([
                'descripcion' => $clase,                
            ]);            
            
        }
    }
}
