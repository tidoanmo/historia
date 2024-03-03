<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $apellidos
 * @property $nombres
 * @property $cedula
 * @property $edad
 * @property $telefono
 * @property $direccion
 * @property $correo
 * @property $ocupacion
 * @property $sexo
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Evolucione[] $evoluciones
 * @property Historia[] $historias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
		'apellidos' => 'required',
		'nombres' => 'required',
		'cedula' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['apellidos','nombres','cedula','edad','telefono','direccion','correo','ocupacion','sexo','fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evoluciones()
    {
        return $this->hasMany('App\Models\Evolucione', 'paciente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historias()
    {
        return $this->hasMany('App\Models\Historia', 'paciente_id', 'id');
    }
    

}
