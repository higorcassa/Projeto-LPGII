<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
     public $fillable = ['rua',
                         'numero',
                         'CEP',
                         'bairro',
                         'complemento',
                         'tipo',
                         'cidade',
                         'estado',
                         'pais'];
}
