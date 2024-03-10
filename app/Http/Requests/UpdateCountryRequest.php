<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest
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
<<<<<<< HEAD
            'country' => 'required',
            'country_icon' => 'required',
=======
            'country' => ['required','string','max:255'],
        
            'country_icon' => ''
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
        ];
    }
}
