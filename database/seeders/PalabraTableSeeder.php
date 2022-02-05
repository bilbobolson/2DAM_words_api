<?php

/**
 * Antonio José Sánchez Bujaldón
 * Programación de Aplicaciones Multimedia y de Dispositivos Móviles
 * curso 2021|22
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PalabraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $palabras = [
            ["palabra" => "CANOA"],
            ["palabra" => "VIEJO"],
            ["palabra" => "JOVEN"],
            ["palabra" => "PISTA"],
            ["palabra" => "BACHE"],
            ["palabra" => "VALOR"],
            ["palabra" => "CACAO"],
            ["palabra" => "PADRE"],
            ["palabra" => "MADRE"],
            ["palabra" => "CABLE"],
            ["palabra" => "BALON"],
            ["palabra" => "CHINA"],
            ["palabra" => "CHILE"],
            ["palabra" => "PILAR"],
            ["palabra" => "CIEGO"],
            ["palabra" => "CORAL"],
            ["palabra" => "CRUJE"],
            ["palabra" => "DATOS"],
            ["palabra" => "EBANO"],
            ["palabra" => "BRAZO"],
            ["palabra" => "TITAN"],
        ] ;

        /**
         * Indicamos a ELOQUENT que debe insertar en la 
         * tabla PALABRA los registros definidos en el 
         * array
         */
        DB::table('palabra')->insert($palabras) ;
    }
}
