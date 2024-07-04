<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
			'ter_muerte' => 'required|integer',
			'ter_invalidez' => 'required|integer',
			'ter_medicos' => 'required|integer',
			'ocu_muerte' => 'required|integer',
			'ocu_invalidez' => 'required|integer',
			'ocu_medicos' => 'required|integer',
			'danos' => 'required|integer',
			'materiales' => 'required|integer',
			'legal' => 'required|integer',
			'limites' => 'required|integer',
			'funerarios' => 'required|integer',
			'grua' => 'required|integer',
			'indem' => 'required|integer',
			'extra' => 'required|integer',
			'valor' => 'required|integer',
			'descripcion' => 'required|string',
			'estado' => 'required',
        ];
    }
}
