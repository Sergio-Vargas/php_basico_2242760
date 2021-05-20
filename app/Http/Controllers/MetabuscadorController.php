<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //accion mostar el formulario de busqueda
    public function formulario_buscador(){
        //muestra la vista
        return view('metabuscador');
    }
    //accion realizar busqueda
    public function buscar(){
        //Datos llegan al arreglo $_POST
        /* echo"<pre>";
        print_r($_POST);
        echo"</pre>";
        */
        $termino=$_POST["termino"];
        $motor=$_POST["motores"];
        //Redireccionar al motor correcto,junto con el termino
        //querystring
        switch($motor){
            case 1:
                return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2:
                return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3:
                return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 4:
                return redirect()->to("http://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=$termino");
                break;
            case 5:
                return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 6:
                return redirect()->to("https://search.aol.com/aol/search?q=$termino");
                break;
            case 7:
                return redirect()->to("https://yandex.com/search/?text=$termino");
                break;
            case 8:
                return redirect()->to("https://www.twitch.tv/search?term=$termino");
                break;
            case 9:
                return redirect()->to("https://twitter.com/search?q=$termino");
                break;
            case 10:
                return redirect()->to("https://www.amazon.com/s?k=$termino");
                break;
        }
    }
}
