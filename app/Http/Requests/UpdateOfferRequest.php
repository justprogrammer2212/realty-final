<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOfferRequest extends FormRequest
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
            'title' => 'required|min:5|max:30',
            'price' => 'required|numeric',
            'currency' => 'required',
            'status' => 'required',
            'location' => 'required|min:5|max:30',
            'street' => 'required|min:5|max:30',
            'square' => 'required|numeric',
            'garage' => 'required|max:30',
            'bathroom' => 'required|numeric',
            'bedrooms' => 'required|numeric',
            'age_build' => 'required|numeric',
            'description' => 'required|max:700',
            'category_id' => 'required',
            'offer_image' => 'nullable|image',
        ];
    }
}
