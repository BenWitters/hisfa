<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateWaste extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // later enkel admin
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'waste_silo_number' => 'required',
        ];
    }
}