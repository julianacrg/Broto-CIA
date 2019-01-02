<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividades extends Model
{
      protected $fillable = [ 'id', 'data', 'funcionarios_id', 'arranjos_orcamentos_id'];



}
