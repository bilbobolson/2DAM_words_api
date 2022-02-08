<?php

namespace App\Http\Controllers;

/**
 * Antonio José Sánchez Bujaldón
 * Programación de Aplicaciones Multimedia y de Dispositivos Móviles
 * curso 2021|22
 */

use App\Models\Palabra;
use Illuminate\Http\Request ;

class PalabraController extends Controller
{
    /**
     * Obtiene una palabra aleatoria
     * @param $req
     * @return 
     */
    public function palabra(Request $req)
    {
        // Buscamos palabras que no hayan sido usadas
        $coleccion = Palabra::where('usada', false) ;

        // Comprobar si hay palabras sin usar
        if ($coleccion->count() == 0):            

            // reseteamos a no usados los registros
            Palabra::where('usada', true)->update(['usada' => false]) ;

            // Buscamos de nuevo palabras que no hayan sido usadas
             $coleccion = Palabra::where('usada', false) ;
             
        endif; 

        // Cogemos palabra al azar de entre todas las recuperadas
        // de la base de datos.
        $palabra = $coleccion->get()->random(1)->first() ;

        // marcamos la palabra elegida como usada.
        $palabra->usada = true;
        $palabra->save() ;
                    
        //
        return response()->json($palabra, 200) ;

    }

    /**
     * Marca como usada una palabra
     * @param $req
     * @return
     */
    public function usada(Request $req, $id)
    {        
        $pal = Palabra::find($id) ;
        $pal->usada = true;
        $pal->save() ;

        // Él siguiente método hace lo mismo.
        //Palabra::where('id', 19)->update(['usada' => true]) ;

        return response()->json([], 200) ;
    }

    /**
     * Resetea todas las palabras a NO USADAS
     * @param $req
     * @return
     */
    public function reset(Request $req) 
    {
        Palabra::where('usada', true)->update(['usada' => false]) ;
        return response()->json([],200) ;
    }

    // Illuminate\Database\Eloquent\Collection
    // Illuminate\Database\Eloquent\Builder
}
