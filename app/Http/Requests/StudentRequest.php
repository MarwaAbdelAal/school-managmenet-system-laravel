<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        // check unique if not soft deleted
        // check methods for update and store
        return [
            'IDno' => 'required|unique:students,IDno,NULL,id,deleted_at,NULL|max:10',
            'name' => 'required|max:20',
            'age' => 'required',
        ];
    }
}
