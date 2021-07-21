<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
                'matricula' => 'required|unique:setores,matricula,'.$id.',id',
                'setor_id' => 'required',
                'dt_nascimento' => 'required',
                'escala_id' => 'required',
                'ativo' => 'required'
            ];
    }
}
