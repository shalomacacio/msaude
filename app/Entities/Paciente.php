<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Paciente.
 *
 * @package namespace App\Entities;
 */
class Paciente extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cns',
        'nome',
        'nome_mae',
        'cpf',
        'dt_nascimento',
        'sexo',
        'celular',
        'email',
        'email_verified_at',
        'cep',
        'uf',
        'bairro',
        'comp',
        'rua',
        'num',
        'ubs_id',
        'agen_saude_id',
    ];

}
