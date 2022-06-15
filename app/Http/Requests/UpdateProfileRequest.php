<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UpdateProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => ['string', 'max:255'],
            'last_name' => [ 'string', 'max:255'],
            'identifier' => [ 'integer', 'max:18'],
            'phone' => ['integer', 'max:16'],
            'address' => ['string', 'max:255'],
            'municipality_id' => ['exists:App\Models\Headquarters,id'],
            'password' => [
                'confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->uncompromised(),
            ],
            'email' => [
                'string',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id)]
        ];
    }
}
