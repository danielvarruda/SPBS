<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetorRequest extends FormRequest
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
        $id = $this->route()->parameter('id');

        return [
            'nome' => 'required|unique:setores,nome,'.$id.',id',
            'sigla' => 'required|unique:setores,sigla,'.$id.',id',
            'descricao' => 'required',
            'ativo' => 'required'
        ];
    }
}
