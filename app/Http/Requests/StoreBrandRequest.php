<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
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
            'type_car' => 'nullable|max:40|',
            'phone' => 'required|max:30',
            'logo' => 'nullable|max:255',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Il nome e\' richiesto',
            'name.max' => 'Il nome puo\' contenere al massimo 80 caratteri',
            'type_car.max' => 'Il tipo di auto puo\' contenere al massimo 40 caratteri',
            'phone.required' => 'Il numero e\' obbligatorio',
            'phone.max' => 'Il numero puo\' contenere al massimo 30 caratteri',
            'logo.max' => 'Il link dell\'immagine puo\' contenere al massimo 255 caratteri',
        ];
    }
}
