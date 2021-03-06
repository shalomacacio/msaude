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
        'uf_id',
        'cidade_id',
        'bairro_id',
        'comp',
        'rua',
        'num',
        'ubs_id',
        'agente_saude',
    ];

    //MUTATORS

    public function setNomeAttribute($value)
    {
        $this->attributes['nome'] = strtoupper($value); 
    }

    public function setNomeMaeAttribute($value)
    {
        $this->attributes['nome_mae'] = strtoupper($value); 
    }
    
    public function setRuaAttribute($value)
    {
        $this->attributes['rua'] = strtoupper($value); 
    }

    public function setAgenteSaudeAttribute($value)
    {
        $this->attributes['agente_saude'] = strtoupper($value); 
    }

    //RELACIONAMENTOS

    public function comorbidades() {
        return $this->belongsToMany( Comorbidade::class );
    }

    public function ubs() {
        return $this->belongsTo( Ubs::class );
    }

}
