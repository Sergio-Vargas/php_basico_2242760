<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    //vincular modelo en la tabla
    protected $table="album";
    // establecer  pk para cantidad
    protected $primaryKey="AlbumId";
    //omitir campo de auditoria
    public $timestamps= false;

    //iverso relacio  de m-1
    public function artista(){
        //belongsTo: relacion muchoa a 1
    return $this->belongsTo('App\Artist','ArtistId');

    }
}
