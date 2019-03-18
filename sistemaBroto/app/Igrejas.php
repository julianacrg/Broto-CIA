<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Igrejas extends Model
{
  public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    }
  protected $fillable = ['id_igrejas','orcamentos_id', 'nome', 'endereço', 'data', 'horario'];

}
