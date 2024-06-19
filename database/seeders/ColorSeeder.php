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
        $colors = [
            
            "Aguacate", // Avocado
            "Albaricoque", // Apricot
            "Amarillo canario", // Canary yellow
            "Amarillo limón", // Lemon yellow
            "Amarillo", // Yellow 
            "Antracita", // Anthracite
            "Apricot", // Apricot
            "Aquamarina", // Aquamarine
            "Azul celeste", // Sky blue
            "Azul Cerúleo", // Cerulean blue
            "Azul Klein", // Klein blue
            "Azul marino", // Navy blue
            "Azul", // Blue
            "Blanco", // White 
            "Beige", // Beige
            "Bistre", // Bistre
            "Bronce", // Bronze
            "Bronceado", // Bronzed
            "Burdeos", // Burgundy
            "Café con leche", // Latte
            "Café", // Coffee
            "Caqui claro", // Light khaki
            "Caqui", // Khaki
            "Caramelo claro", // Light caramel
            "Caramelo", // Caramel
            "Carbón", // Charcoal
            "Celeste", // Sky blue        
            "Cereza oscura", // Dark cherry
            "Cereza", // Cherry
            "Ciruela oscura", // Dark plum
            "Ciruela", // Plum
            "Cobalto oscuro", // Dark cobalt
            "Cobalto", // Cobalt
            "Cobre pulido", // Burnished copper
            "Cobre", // Copper
            "Coral", // Coral
            "Crema", // Cream
            "Dorado", // Gold
            "Ébano", // Ebony
            "Esmeralda", // Emerald
            "Frambuesa oscura", // Dark raspberry
            "Frambuesa", // Raspberry
            "Fucsia", // Fuchsia
            "Gris azulado", // Blue-gray
            "Gris perla", // Pearl gray
            "Heliotropo", // Heliotrope
            "Hortensia", // Hydrangea
            "Índigo", // Indigo
            "Lavanda", // Lavender
            "Lila", // Lilac
            "Lima", // Lime
            "Malva", // Mauve
            "Marfil", // Ivory
            "Marrón", // Brown 
            "Morado", // Purple "Gris", // Gray
            "Mostaza", // Mustard
            "Naranja quemado", // Burnt orange
            "Naranja", // Orange
            "Negro", // Black
            "Ocre", // Ochre
            "Oliva", // Olive
            "Opal", // Opal
            "Oro", // Gold
            "Palo rosa", // Rosewood
            "Plateado", // Silver
            "Púrpura real", // Royal purple
            "Púrpura", // Purple
            "Rojo", // Red
            "Rosa mexicano", // Hot pink
            "Rosa", // Pink
            "Rubí", // Ruby
            "Salmón", // Salmon
            "Sepia", // Sepia
            "Terracota", // Terracotta
            "Verde", // Green
            "Violeta", // Violet
              
        ];
        
        foreach ($colors as $color) {
            Color::create([
                'descripcion' => $color,                
            ]);        
            
        }}        
}