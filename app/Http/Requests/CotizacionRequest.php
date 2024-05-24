<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CotizacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'cliente_id' => 'required|exists:clientes,id',
                    'fecha_creacion' => 'required|date_format:Y-m-d',
                    'productos_servicios' => 'required',
                    'cantidad' => 'required|integer|min:1',
                    'precio_unitario' => 'required|numeric|min:0',
                    'total' => 'required|numeric|min:0',
                    'estado' => 'required|in:pendiente,aceptada,rechazada',
                    'notas' => 'nullable|string',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'cliente_id' => 'required|exists:clientes,id',
                    'fecha_creacion' => 'required|date_format:Y-m-d',
                    'productos_servicios' => 'required',
                    'cantidad' => 'required|integer|min:1',
                    'precio_unitario' => 'required|numeric|min:0',
                    'total' => 'required|numeric|min:0',
                    'estado' => 'required|in:pendiente,aceptada,rechazada',
                    'notas' => 'nullable|string',
                ];
            default:
                return [];
        }
    }
}