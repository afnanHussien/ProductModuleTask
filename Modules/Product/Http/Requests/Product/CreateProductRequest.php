<?php

namespace Modules\Product\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'category_id' => 'required|integer|exists:categories,id',
            'colorIds.*' => 'required|integer|exists:colors,id',
            'priceArray.*' => 'required|regex:/^\d*(\.\d{1,2})?$/'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
