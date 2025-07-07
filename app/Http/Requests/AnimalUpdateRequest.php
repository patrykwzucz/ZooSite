<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AnimalUpdateRequest extends FormRequest
{

    public function authorize(): bool
    {
        if (!Auth::check()) return false;
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
            "name" => "required|min:2|max:100",
            "region" => "required|min:2|max:100",
            "type" => Rule::in(["Herbivore", "Carnivore", "Omnivore"]),
            "description" => "required|min:150",
            "image" => "nullable|file|image|mimes:jpg,jpeg,bmp,png",
        ];
    }
}
