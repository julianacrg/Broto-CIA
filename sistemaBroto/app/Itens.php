<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itens extends Model
{
  public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    }
    protected $fillable = [ 'id', 'nome', 'tipo', 'categoria', 'status', 'qtd', 'preco', 'descricao', 'foto', 'unidade'];
}
