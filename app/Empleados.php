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

    public function clientes(){
        return $this->hasMany('App\Customer','SupportRepId');
    }
    //relacion 1-M facturas(a traves del cliente)
    public function facturas(){
        return $this->hasManyThrough('App\Factura',
                                     'App\Customer',
                                     'SupportRepId', //FK del abuelo en papa
                                     'CustomerId',
                                     'EmployeeId',
                                     'CustomerId'
                                    );
    }
}
