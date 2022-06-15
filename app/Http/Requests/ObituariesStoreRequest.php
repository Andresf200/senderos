<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObituariesStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name_deceased' => ['required', 'string', 'max:255'],
            'family' => ['required', 'string', 'max:255'],
            'date_death' => ['date', 'required'],
            'wake' => ['required', 'string', 'max:100'],
            'church' => ['required', 'string', 'max:255'],
            'hour' => ['required', 'string', 'max:15'],
            'cemetery' => ['required', 'string', 'max:255'],
            'municipality_id' => ['exists:App\Models\Headquarters,id'],
        ];
    }
}
