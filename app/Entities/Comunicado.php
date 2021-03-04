<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Comunicado.
 *
 * @package namespace App\Entities;
 */
class Comunicado extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'user_envio',
        'paciente_id',
        'descricao',
        'data_envio',
        'confirmado', 
        'data_resposta'

    ];

}
