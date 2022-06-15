<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarrouselRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'carrouselImage' => ['required','mimes:jpg,jpeg,bmp,png']
        ];
    }
}
