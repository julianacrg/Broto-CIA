<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
  public function getDateFormat()
    {
      return 'Y-m-d H:i:s.u';
    }
  protected $fillable = [ 'id', 'nome', 'cpf'];

}
