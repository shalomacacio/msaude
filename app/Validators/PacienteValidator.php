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
            'nome' => 'required',
            'cpf' => 'required',
            'celular' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];
}
