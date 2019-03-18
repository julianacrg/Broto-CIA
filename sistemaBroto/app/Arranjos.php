<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arranjos extends Model
{
  public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    }
  protected $fillable = [ 'id', 'valor', 'foto', 'nome', 'categoria','status'];


  public function ativiades(){
    return $this->hasMany('App\Atividades');
  }

}
