<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamentos extends Model
{
  public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    }
  protected $fillable = ['evento', 'cliente', 'local', 'data', 'horario', 'celular', 'telefone', 'endereco', 'status', 'valor'];
}
