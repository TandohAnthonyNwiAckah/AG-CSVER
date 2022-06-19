<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class CountriesAddRequest extends FormRequest
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
            
				"id" => "required|numeric",
				"continent_code" => "required|string",
				"currency_code" => "required|string",
				"iso2_code" => "required|string",
				"iso3_code" => "required|string",
				"iso_numeric_code" => "required|string",
				"fips_code" => "required|string",
				"calling_code" => "required|string",
				"common_name" => "required|string",
				"official_name" => "required|string",
				"endonym" => "required|string",
				"demonym" => "required|string",
        ];
    }

	public function messages()
    {
        return [
            //using laravel default validation messages
        ];
    }

	/**
     * If validator fails return the exception in json form
     * @param Validator $validator
     * @return array
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
