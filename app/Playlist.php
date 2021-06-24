<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    //vincular modelo en la tabla
    protected $table="playlist";
    // establecer  pk para cantidad
    protected $primaryKey="PlaylistId";
    //omitir campo de auditoria
    public $timestamps= false;

    //relacion MM
    public function canciones(){
        //metodo: belongsToMany
        //1.
        //2.
        //3.
        //4.
        return $this->belongsToMany('App\Cancion',
                                    'playlisttrack',
                                    'PlaylistId',
                                    'TrackId');

    }
}
