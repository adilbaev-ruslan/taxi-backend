<?php

namespace App\Http\Requests\owner;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            'user_id' => 'required|integer',
            'licence_number' => 'nullable|string|min:9|max:9',
            'expiry_date' => 'nullable|date',
            'working' => 'boolean',
        ];
    }
}
