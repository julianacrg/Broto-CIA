<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itens extends Model
{
    protected $fillable = [ 'id', 'nome', 'categoria', 'status', 'qtd', 'preco', 'descricao', 'foto'];
}
