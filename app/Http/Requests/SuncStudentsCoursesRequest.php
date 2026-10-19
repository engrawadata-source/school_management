<?php

namespace App\Http\Requests;

//use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SuncStudentsCoursesRequest extends FormRequest
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
            'student_id' => 'required|integer|exists:students,id',

            'course_ids' => 'required|array|min:1',

            'course_ids.*' => 'required|integer|distinct|exists:courses,id',//distinct=uniqe in  the array

        ];
    }
}
