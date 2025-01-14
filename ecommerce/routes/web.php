<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hola <b>Rocio Ailen Monaco</b>, espero que tengas una amena jornada de trabajo junto a tu hermano Gerardo.<br>
    Te cuento que Gerardo es <b>muy lento</b> pero no obstante hizo la tarea que le indicaste--> Ver los videos.";
});


Route::get('/hermano/{nombre}', function ($nombre) {

    $contenido = "";

    switch ($nombre) {

        case "rocio":
            $contenido = "Rocio, es la hermana preferia de Gerardo. Es una gran persona , inteligente a la cual admira profundamente.";
            break;
        case "vanesa":
            $contenido = "Vanesa, es la 2da hermana en preferencia de Gerardo. Les rebalo a los hermanos un sobrino hermoso llamado Benjamin.";
            break;
        default:
            $contenido = "Gerardo no tiene un hermano/a llamada/o {} ";
    }


    return $contenido;
});
