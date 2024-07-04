<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'id_cliente' => 'required|integer',
			'id_marca' => 'required|integer',
			'id_clase' => 'required|integer',
			'modelo' => 'required|string',
			'id_color' => 'required|integer',
			'id_tipo' => 'required|integer',
			'id_uso' => 'required|integer',
			'placa' => 'required|string',
			'ano' => 'required|integer',
			'peso' => 'required|string',
			'serial_motor' => 'required|string',
			'puestos' => 'required|integer',
			'serial_niv' => 'required|string',
        ];
    }
}
