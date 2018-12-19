<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItensOrcamentos extends Model
{
  protected $fillable = [ 'id_itens_orcamentos', 'qtd_itens', 'itens_id', 'orcamentos_id'];

}
