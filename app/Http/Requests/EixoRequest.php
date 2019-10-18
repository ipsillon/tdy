<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EixoRequest extends FormRequest
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
            'nome' => 'required|max:200'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome do eixo é obrigatorio',
            'nome.max'  => 'Excedeu o tamanho máximo de 200 caracteres.',
        ];
    }
}
