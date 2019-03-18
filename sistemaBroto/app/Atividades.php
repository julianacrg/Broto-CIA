<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividades extends Model
{
  public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    }
      protected $fillable = [ 'id', 'data', 'funcionarios_id', 'arranjos_orcamentos_id'];



}
