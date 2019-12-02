<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $table = 'orcamento';
    protected $fillable = ['vendedor', 'cliente', 'data', 'hora', 'descricao', 'valor'];
}
