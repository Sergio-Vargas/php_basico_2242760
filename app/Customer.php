<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     //vincular modelo en la tabla
    protected $table="customer";
    // establecer  pk para cantidad
    protected $primaryKey="CustomerId";
    //omitir campo de auditoria
    public $timestamps= false;
}
