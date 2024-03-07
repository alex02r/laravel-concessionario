<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOptionalRequest extends FormRequest
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
            'name' => 'required|max:80',
            'price' => 'required|max:40|',
            'description' => 'required|max:250',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome e\' richiesto',
            'name.max' => 'Il nome puo\' contenere al massimo 80 caratteri',
            'description.required' => 'La descrizone e\' richiesta',
            'description.max' => 'La descrizione puo\' contenere al massimo 250 caratteri',
            'price.required' => 'Il prezzo e\' obbligatorio',
            'price.max' => 'Il prezzo puo\' contenere al massimo 30 caratteri',
        ];
    }
}
