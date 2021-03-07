<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class PacienteValidator.
 *
 * @package namespace App\Validators;
 */
class PacienteValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required|max:50',
            'cpf' => 'required|cpf|unique:pacientes',
            'celular' => 'required|max:11',
            'cep' => 'numeric'

        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];

    protected $messages = [
        'nome.required'=>'Este campo é obrigatório',
        'cns.required'=>'Este campo é obrigatório',
        'cns.unique'=>'Este paciente já existe',
        'cns.min'=>'Mínimo 15 dígitos',
        'cns.max'=>'Máximo 15 dígitos',
        'celular.min'=>'Celular invalido',
        'celular.max'=>'Celular invalido',
        'cep.numeric'=>'Use somente numeros',
        'cpf.unique'=>'Este cpf já existe',
        'cpf.required'=>'Este campo é obrigatório',

    ];
}
