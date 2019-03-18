<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArranjosOrcamentos extends Model
{
  public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    }
  protected $fillable = ['qtd_arranjos', 'arranjos_id', 'orcamentos_id'];

}
