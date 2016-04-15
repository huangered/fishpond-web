<?php

namespace fishpond\Http\Requests;

use fishpond\Http\Requests\Request;

class DocumentFormRequest extends Request
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
           
        'title' => 'required',
        'author' => 'required',
        'content' => 'required'
        
        ];
    }
}
