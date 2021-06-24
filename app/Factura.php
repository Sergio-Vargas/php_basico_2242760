<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //vincular modelo en la tabla
    protected $table="invoice";
    // establecer  pk para cantidad
    protected $primaryKey="InvoiceId";
    //omitir campo de auditoria
    public $timestamps= false;

    //Relacion N:M entre factura y canciones
    public function canciones(){
        //relacion n:m belongsToMany
        //parametros : 1.Modelo a relacionar
        //             2.Tabla pivote
        //             3.FK del presente modelo de la tabla
        //             4.FK del modelo relacionado en la tabla
        return $this->belongsToMany('App\Cancion',
                                    'invoiceline',
                                    'InvoiceId',
                                    'TrackId'
                                    );
    }
}
