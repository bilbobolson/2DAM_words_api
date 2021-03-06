<?php

namespace Database\Seeders;

/**
 * Antonio José Sánchez Bujaldón
 * Programación de Aplicaciones Multimedia y de Dispositivos Móviles
 * curso 2021|22
 */

use App\Models\Palabra;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Indicamos a la factoría del modelo Palabra que 
        // queremos crear 10 registros con información fake.
        //Palabra::factory(10)->create() ;

        $this->call([
            PalabraTableSeeder::class,            
        ]);
    }
}
