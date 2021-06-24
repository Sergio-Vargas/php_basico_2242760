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

    //definir artista  1-M albunes

    public function discos(){
    //hasmany:parametros
    //2.fk del modelo papa
    //3.fk modelo hijo
    return $this->hasMany('App\Disco','ArtistId');

    }
    //definir relacion de multitabla
    //entre artistas y sus canciones(Tracks)
    public function canciones(){
        //hasManythrought
        //1.Modelonieto
        //2.modelo papa
        //3.FK del abuelo en el papa
        //4.FK del papa en el nieto
        return $this->hasManyThrough('App\Cancion',
                                     'App\Disco',
                                     'ArtistId',
                                     'AlbumId',
                                     'ArtistId',
                                     'AlbumId');
    }
}
