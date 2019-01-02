<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arranjos extends Model
{
  protected $fillable = [ 'id', 'valor', 'foto', 'nome', 'categoria','status'];


  public function ativiades(){
    return $this->hasMany('App\Atividades');
  }

}
