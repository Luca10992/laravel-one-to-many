<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'label' => 'required|string',
            'color' => 'required|string'
        ];
    }

    public function message()
    {
        return [
            'label.required' => 'Inserire il nome della tipologia',
            'color.required' => 'Inserire un colore'
        ];
    }
}