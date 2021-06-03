<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //vincular modelo en la tabla
    protected $table="employee";
    // establecer  pk para cantidad
    protected $primaryKey="EmployeeId";
    //omitir campo de auditoria
    public $timestamps= false;
}
