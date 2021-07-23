<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    //
    protected $table = 'setores';

    protected $fillable = [
        'nome', 'sigla', 'descricao', 'ativo'
    ];

    public function funcionarios()
    {
        return $this->hasMany(Funcionario::class);
    }
}