<?php

namespace Database\Seeders;
use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tipo::factory(5)->create();
        $vehicleTypes = [
            "Automóvil", // Car in Spanish
            "Camioneta", // Truck in Spanish
            "Motocicleta", // Motorcycle in Spanish
            "Scooter", // Scooter in Spanish
            "Autobús", // Bus in Spanish
            "Camión", // Truck in Spanish
            "Furgoneta", // Van in Spanish
            "Minibús", // Minibus in Spanish
            "Autocaravana", // Motorhome in Spanish
            "Camioneta todoterreno", // SUV (Sport Utility Vehicle) in Spanish
            "Camioneta pickup", // Pickup truck in Spanish
            "Camión articulado", // Articulated lorry in Spanish
            "Camión grúa", // Crane truck in Spanish
            "Camión cisterna", // Tanker truck in Spanish
            "Camión de bomberos", // Fire engine in Spanish
            "Ambulancia", // Ambulance in Spanish
            "Motocicleta de policía", // Police motorcycle in Spanish
            "Motocicleta de cross", // Dirt bike in Spanish
            "Motocicleta de turismo", // Touring motorcycle in Spanish
            "Bicicleta", // Bicycle in Spanish
            "Bicicleta de montaña", // Mountain bike in Spanish
            "Bicicleta de carretera", // Road bike in Spanish
            "Bicicleta eléctrica", // Electric bike in Spanish
            "Cuatriciclo", // Quad bike in Spanish
            "Monopatín", // Skateboard in Spanish
            "Patinete eléctrico", // Electric scooter in Spanish
            "Segway", // Segway in Spanish
            "Grúa", // Crane in Spanish
            "Excavadora", // Excavator in Spanish
            "Bulldozer", // Bulldozer in Spanish
            "Cargadora", // Loader in Spanish
            "Tractor", // Tractor in Spanish
            "Remolque", // Trailer in Spanish
            "Autobús escolar", // School bus in Spanish
            "Tranvía", // Tram in Spanish
            "Metro", // Subway in Spanish
            "Tren", // Train in Spanish
            "Avión", // Airplane in Spanish
            "Helicóptero", // Helicopter in Spanish
            "Globo aerostático", // Hot air balloon in Spanish
            "Barco", // Boat in Spanish
            "Yate", // Yacht in Spanish
            "Lancha", // Motorboat in Spanish
            "Moto acuática", // Jet ski in Spanish
            "Submarino", // Submarine in Spanish
        ];
        foreach ($vehicleTypes as $vehicleType) {
            Tipo::create([
                'descripcion' => $vehicleType,                
            ]);            
            
        }
    }
}
