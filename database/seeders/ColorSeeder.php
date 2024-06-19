<?php

namespace Database\Seeders;
use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Color::factory(10)->create();
        $colores = [
            "Amarillo",
            "Azul",
            "Beige",
            "Bordo",
            "Carmesí",
            "Celeste",
            "Cian",
            "Cobalto",
            "Colorado",
            "Crema",
            "Dorado",
            "Fucsia",
            "Gris",
            "Lima",
            "Magenta",
            "Marfil",
            "Morado",
            "Naranja",
            "Negro",
            "Oro",
            "Pardo",
            "Plata",
            "Purpura",
            "Rosa",
            "Rojo",
            "Rubí",
            "Sanguina",
            "Verde",
            "Violeta",
        ];

        foreach ($colores as $color) {
            Color::create([
                'descripcion' => $color,                
            ]);            
            
        }}

        
}
