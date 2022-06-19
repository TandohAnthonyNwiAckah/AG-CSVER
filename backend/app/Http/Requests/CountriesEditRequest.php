<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class CountriesEditRequest extends FormRequest
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
            
				"id" => "filled|numeric",
				"continent_code" => "filled|string",
				"currency_code" => "filled|string",
				"iso2_code" => "filled|string",
				"iso3_code" => "filled|string",
				"iso_numeric_code" => "filled|string",
				"fips_code" => "filled|string",
				"calling_code" => "filled|string",
				"common_name" => "filled|string",
				"official_name" => "filled|string",
				"endonym" => "filled|string",
				"demonym" => "filled|string",
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
