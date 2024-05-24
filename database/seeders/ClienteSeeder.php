<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 11; $i++) {
            Cliente::create([
                'nombre' => 'Cliente ' . $i,
                'email' => 'cliente' . $i . '@example.com',
                'telefono' => '123456789',
                'direccion' => 'Dirección del cliente ' . $i,
            ]);
        }
    }
}
