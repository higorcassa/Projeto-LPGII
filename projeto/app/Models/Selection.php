<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
       public $fillable = ['data_inicio',
           'data_fim',
           'ativo',
           'nome',
           'descricao'];

}
