<?php

namespace App\Entities;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'cpf', 'celular',
    ];

    public function setNomeAttribute($value)
    {
        $this->attributes['nome'] = strtoupper($value); 
    }

    // RELACIONAMENTOS
    public function paciente(){
        return $this->belongsTo(\App\Entities\Paciente::class, 'cpf', 'cpf' );
    }

}
