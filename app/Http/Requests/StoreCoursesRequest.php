<?php

namespace App\Http\Requests;

//use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCoursesRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'teacher_id' => 'required|integer|exists:teachers,id',
        'courses' => 'required|array|min:1',
        'courses.*.title' => 'required|string|max:255',
        'courses.*.description' => 'required|string',


        ];
    }
}
