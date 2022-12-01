<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;


class StoreUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'student_Name' => ['required', 'string'],
            'student_Email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->withoutTrashed()],
            'student_Password' => ['required', 'string', 'confirmed', Password::defaults()],
            'student_Phone' => ['required', 'string'],
            // 'student_Status' => ['required', 'string', 'confirmed', Password::defaults()],
        ];
    }
}
