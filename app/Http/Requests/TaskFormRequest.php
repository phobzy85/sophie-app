<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskFormRequest extends FormRequest
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
		return [
			'type' => 'required',
			'amount' => 'required',
			'info' => '',
			'date' => 'required'
		];
    }


	 protected function prepareForValidation()
	 {
		$this->merge([
			'type' => strip_tags($this->type),
			'amount' => strip_tags($this->amount),
			'info' => strip_tags($this->info),
			'date' => strip_tags($this->date),
		]);
	 }
}
