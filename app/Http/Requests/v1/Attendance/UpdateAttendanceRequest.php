<?php

namespace App\Http\Requests\v1\Attendance;

use App\Enums\LeaveType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAttendanceRequest extends FormRequest
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
            'userIsd' => ['required', 'integer'],
            'date' => ['required', 'date'],
            'checkIn' => ['required', 'date_format:H:i:s'],
            'checkOut' => ['required', 'date_format:H:i:s'],
            'status' => ['nullable', 'string', Rule::in(LeaveType::getValues()), 'max:255'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
