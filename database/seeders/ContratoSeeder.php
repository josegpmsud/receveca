<?php

namespace Database\Seeders;
use App\Models\Contrato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contrato::factory(10)->create();
    }
}
