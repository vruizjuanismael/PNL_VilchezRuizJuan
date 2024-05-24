<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;

    protected $table = 'cotizaciones';

    protected $fillable = [
        'fecha_creacion',
        'productos_servicios',
        'cantidad',
        'precio_unitario',
        'total',
        'estado',
        'notas',
    ];

    protected $casts = [
        'fecha_creacion' => 'date',
    ];
}
