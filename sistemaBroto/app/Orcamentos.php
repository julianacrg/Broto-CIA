<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamentos extends Model
{
  protected $fillable = [ 'id', 'evento', 'cliente', 'local', 'data', 'horario', 'celular', 'telefone', 'endereco', 'status', 'itens_orcamentos_id', 'arranjos_orcamentos_id'];
}
