<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateItemRequest extends FormRequest
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
            'item_title' => [
                'required',
                'max:255',
            ],

            'item_price' => [
                'required',
                'numeric'
            ],

            'item_image' => [
                'required',
                'image'
            ]
        ];
    }
}
