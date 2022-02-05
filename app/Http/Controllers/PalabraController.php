<?php

/**
 * Antonio José Sánchez Bujaldón
 * Programación de Aplicaciones Multimedia y de Dispositivos Móviles
 * curso 2021|22
 */

namespace App\Http\Controllers;

use App\Models\Palabra;

class PalabraController extends Controller
{
    /**
     * Obtiene una palabra aleatoria
     * @return void
     */
    public function palabra()
    {
        $pal = Palabra::where('usada', false)
                    ->get()
                    ->random(1)
                    ->first() ;

        dd($pal) ;

    }

    //
}
