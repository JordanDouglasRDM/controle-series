<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SeriesRequest extends FormRequest
{
    /**
     * @var false|mixed|string|null
     */

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|min:2|unique:series,nome',
            'cover' => 'image|nullable|mimes:jpeg,png,jpg,gif',
            'seasonsQty' => 'required|numeric|min:1',
            'episodesPerSeason' => 'required|numeric|min:1',
        ];
    }
//    public function failedValidation(Validator $validator)
//    {
//        throw new HttpResponseException(response()->json($validator->errors(), 422));
//    }
}
