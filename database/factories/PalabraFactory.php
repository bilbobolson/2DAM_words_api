<?php

/**
 * Antonio José Sánchez Bujaldón
 * Programación de Aplicaciones Multimedia y de Dispositivos Móviles
 * curso 2021|22
 */

namespace Database\Factories ;

use App\Models\Palabra;
use Illuminate\Database\Eloquent\Factories\Factory;

class PalabraFactory extends Factory
{
	/**
	 * @param $model
	 */
	protected $model = Palabra::class ;

	/**
	 * @return array
	 */
	public function definition()
	{
		return [
			"palabra" => "CANOA",
			"usada"   => $this->faker->boolean(20),
		] ;
	}
}