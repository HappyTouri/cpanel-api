<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransportationPriceRequest extends FormRequest
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
            'price' => 'required',
            'country_id' => 'required',
            'transportation_id' => 'required',
=======
            'country_id'=>'required|exists:countries,id',
        'transportation_id'=>'required|exists:transportations,id',
        'price'=>'required|integer'
>>>>>>> 8f1d9834a604e4b0efa5f6d07865ab52551bee66
        ];
    }
}
