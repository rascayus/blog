<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
        $rules = [
            'name'        => 'required',
            'slug'        => 'required|unique:posts,slug',
            'user_id'     => 'required|integer',
            'category_id' => 'required|integer',
            'tags'        => 'required|array',
            'body'        => 'required',
            'status'      => 'required|in:DRAFT,PUBLISHED',            
        ];

        if($this->get('image'))        
            $rules = array_merge($rules, ['image' => 'mimes:jpg,jpeg,png']);

        return $rules;
            
    }
    public function messages()
    {
    return [
        'name.required'  => 'El nombre es obligatorio',
        'slug.required'  => 'El slug debe ser único',
        'body.required'  => 'Debes introducir contenido',
        'tags.required'  => 'Debes introducir etiquetas',
        'status.required'  => 'Debes añadir el estado del post "PUBLISHED o DRAFT"',
    ];
}
}
