<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => ['string'],
            'price' => ['numeric', 'min:0'],
            'description' => ['string'],
            'category_id' => ['integer', 'exists:categories,id'],
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->categoryId) {
            $this->merge(['category_id' => $this->categoryId]);
        }
    }
}
