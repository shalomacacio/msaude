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
            'cns' => 'required|unique:pacientes',
            'celular' => 'required|max:11',
            'cep' => 'max:8'

        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];
}
