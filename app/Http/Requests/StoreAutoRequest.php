<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAutoRequest extends FormRequest
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
            'brand_id' => 'required',
            'model' => 'required|max:60',
            'year' => 'required',
            'type' => 'required',
            'fuel_type' => 'required',
            'displacement' => 'required',
            'horsepower' => 'required',
            'description' => 'required|max:500',

        ];
    }
    public function messages()
    {
        return [
            'brand_id.required' => 'Il campo Brand è obbligatorio',
            'brand_id.exists' => 'Il campo brand non è valido',
            'model.required' => 'Il campo model è obbligatorio',
            'year.required' => 'Il campo year è obbligatorio',
            'type.required' => 'Il campo type è obbligatorio',
            'fuel_type' => 'Il campo fuel è obbligatorio',
            'displacement.required' => 'Il campo displacement è obbligatorio',
            'horsepower.required' => 'Il campo è obbligatorio',
            'description.required' => 'Il campo description è obbligatorio',
            'description.max' => 'Il campo description deve contenere al massimo 500 caratteri'

        ];
    }
}
