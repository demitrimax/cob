<?php

namespace App\admin;
use DB;

use Illuminate\Database\Eloquent\Model;

class ctelefonos extends Model
{
    //
    protected $table = 'ctelefonos';
    protected $primaryKey = 'id';
    public $timestamps = false;


    protected $casts = [
      'id'            => 'integer',
      'tipo'          => 'string',
      'numero'        => 'integer',

    ];

    public function clientes()
    {
      return $this->belongsToMany('App\admin\ctelefonos');
    }

}
