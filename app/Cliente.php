<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome','nascimento','sexo','responsavel','limite','bloqvenda','restalimentar','limitediario','telefone'];
}
