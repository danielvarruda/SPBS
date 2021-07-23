<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'nome', 'matricula', 'setor_id', 'dt_nascimento', 'ativo', 'escala_id'
    ];

    public function setor(){    
        
        return $this->belongsTo('App\Setor','setor_id', 'id'); 


    }

}
