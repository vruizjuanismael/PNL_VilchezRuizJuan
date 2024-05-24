<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cotizacion;

class CotizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 11; $i++) {
            Cotizacion::create([
                'cliente_id' => $i, // Aquí puedes establecer la lógica que desees para el cliente_id
                'fecha_creacion' => now()->subDays(rand(1, 365)), // Fecha aleatoria en el último año
                'productos_servicios' => 'Productos y servicios de la cotización ' . $i,
                'cantidad' => rand(1, 10),
                'precio_unitario' => rand(10, 100),
                'total' => rand(100, 1000),
                'estado' => ['pendiente', 'aceptada', 'rechazada'][rand(0, 2)],
                'notas' => 'Notas adicionales para la cotización ' . $i,
            ]);
        }
    }
}
