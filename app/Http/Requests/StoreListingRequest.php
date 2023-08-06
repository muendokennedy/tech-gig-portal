<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreListingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
                'title' => 'required',
                'company' => 'required | unique:listings',
                'location' => 'required',
                'website' => 'required',
                'email' => 'required | email',
                'tags' => 'required',
                'description' => 'required'
        ];
    }
}
