<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
     public $fillable = ['data_pagamento',
         'pago',
         'data_inscricao'];
}
