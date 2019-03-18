<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItensArranjos extends Model
{
  public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    }
  protected $fillable = [ 'id_itens_arranjos', 'qtd_itens', 'itens_id', 'arranjos_id'];

}
