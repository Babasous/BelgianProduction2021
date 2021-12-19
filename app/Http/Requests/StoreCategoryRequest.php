<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'nom' => 'required|min:3|max:15|unique:App\Models\Category,nom',
        ];
    }

    // Suite de la troisième forme de validation du formulaire
    public function messages(){
        return [
            'nom.required' => 'A name is requires',
            'nom.min' => 'Minimum 3 characters',
            'nom.max' => 'Maximum 15 characters',
        ];
    }
}
