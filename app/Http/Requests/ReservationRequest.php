<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{

    public function authorize(): bool
    {
        if (Auth::check()) return true;
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:300',
            'phoneNumber' => 'required|min:9|max:12',
            'ticketId' => 'required|integer',
            'reservationDate' => 'required',
            'count' => 'required|integer|min:1',
        ];
    }
}
