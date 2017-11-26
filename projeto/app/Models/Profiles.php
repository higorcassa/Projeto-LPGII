<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    public $fillable = ['rua',
        'nome',
        'data_nascimento',
        'CPF',
        'RG',
        'genero',
        'nome_pai',
        'nome_mae',
        'passaporte',
        'telefone',
        'celular',
        'nacionalidade',
        'escolaridade',
        'emissor_RG'
        ];

}
