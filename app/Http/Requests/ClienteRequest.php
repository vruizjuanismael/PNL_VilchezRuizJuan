<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
                    'nombre' => 'required|max:255',
                    'email' => 'required|email|unique:clientes,email',
                    'telefono' => 'nullable|string|max:20',
                    'direccion' => 'nullable|string|max:255',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'nombre' => 'required|max:255',
                    'email' => 'required|email|unique:clientes,email,' . $this->route('cliente'),
                    'telefono' => 'nullable|string|max:20',
                    'direccion' => 'nullable|string|max:255',
                ];
            default:
                return [];
        }
    }
}
