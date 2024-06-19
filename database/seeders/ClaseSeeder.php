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
            "Automóviles", // Cars
            "Camionetas", // Trucks
            "Motocicletas", // Motorcycles
            "Autobuses", // Buses
            "Camiones articulados", // Articulated lorries
            "Furgonetas", // Vans
            "Bicicletas", // Bicycles
            "Cuatriciclos", // Quad bikes
            "Monopatines", // Skateboards
            "Patinetes eléctricos", // Electric scooters
            "Vehículos de construcción", // Construction vehicles
            "Vehículos agrícolas", // Agricultural vehicles
            "Vehículos militares", // Military vehicles
            "Vehículos de emergencia", // Emergency vehicles
            "Vehículos recreativos", // Recreational vehicles
            "Vehículos de transporte público", // Public transportation vehicles
            "Vehículos eléctricos", // Electric vehicles
            "Carritos de golf", // Golf carts
            "Carretillas elevadoras", // Forklifts
            "Segways", // Segways
            "Hoverboards", // Hoverboards
            "Vehículos todo terreno", // All-terrain vehicles
            "Motocicletas de agua", // Personal watercraft (Jet Skis)
            "Barcos", // Boats
            "Aviones", // Airplanes
            "Helicópteros", // Helicopters
        ];
        

        foreach ($clases as $clase) {
            Clase::create([
                'descripcion' => $clase,                
            ]);            
            
        }
    }
}
