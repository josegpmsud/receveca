<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Usuario;
use App\Models\Plan;
use App\Models\Rol;
use App\Models\Marca;
use App\Models\Clase;
use App\Models\Modelo;
use App\Models\Tipo;
use App\Models\Uso;
use App\Models\Vehiculo;
use App\Models\Color;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClaseSeeder::class,
            ColorSeeder::class,
            MarcaSeeder::class,
            RolSeeder::class,
            UserSeeder::class,
            TipoSeeder::class,
            UsoSeeder::class,
            UsuarioSeeder::class,
            PlanSeeder::class,
            ClienteSeeder::class,
            VehiculoSeeder::class,
            ContratoSeeder::class,
        ]);

        
        
    }
}
