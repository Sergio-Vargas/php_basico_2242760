<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //vincular modelo en la tabla
    protected $table="artist";
    // establecer  pk para cantidad
    protected $primaryKey="ArtistId";
    //omitir campo de auditoria
    public $timestamps= false;
}
