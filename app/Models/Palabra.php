<?php

/**
 * Antonio José Sánchez Bujaldón
 * Programación de Aplicaciones Multimedia y de Dispositivos Móviles
 * curso 2021|22
 */

namespace App\Models ;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Palabra extends Model
{
	use HasFactory ;

	/**
	 * Nombre de la tabla en la base de datos
	 * @param $table
	 */	
	protected $table = 'palabra' ;

	/**
	 * Indicamos el nombre de la clave primaria en caso de que
	 * ésta no sea id.
	 * @param $primaryKey
	 */
	//protected $primaryKey = '' ;

	/**
	 * Indicamos que no vamos a utilizar los campos created_at
	 * y updated_at.
	 * @param $timestamps
	 */
	public $timestamps = false ;

}
