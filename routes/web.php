<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//callback: funcion sin nombre
//que hace parte de los parametros
Route::get("variables",function(){
    //JAVA fuertemente tipados
    //PHP , JAVASCRIPT ,PYTHON : debilmente tipaods
    $mensaje =10;
    var_dump($mensaje);
    echo "<hr>";
    $mensaje="Sergio Vargas";
    var_dump($mensaje);
});

Route::get("arreglos",function(){
    //un arreglo es una estructura de datos
    $estudiante=["AN"=>"Ana",
                "MA"=>"Maria",
                "JO"=>"Jorge"
                ];
    echo "<pre>";
    print_r($estudiante);
    echo "</prev>";
});

Route::get('paises',function(){
    $paises =[
        "COLOMBIA"=>["Capital"=>"Bogota","Moneda"=>"Peso","Poblacion"=>"50.34"],
        "PERU"=>["Capital"=>"Lima","Moneda"=>"Sol","Poblacion"=>"32.51"],
        "PARAGUAY"=>["Capital"=>"Asuncion","Moneda"=>"Guarani","Poblacion"=>"7"]
    ];

    foreach($paises as $nombrepais =>$pais){
        echo"<h1>$nombrepais</h1>";
        echo "<pre>";
        echo($pais["Capital"]);
        echo"<br>";
        echo($pais["Moneda"]);
        echo "</pre>";
        echo "<hr />";
    }
});
