<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evolucione
 *
 * @property $id
 * @property $paciente_id
 * @property $fecha
 * @property $numero
 * @property $resumen
 * @property $indicacion
 * @property $nota
 * @property $created_at
 * @property $updated_at
 *
 * @property Paciente $paciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evolucione extends Model
{
    
    static $rules = [
		'paciente_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['paciente_id','fecha','numero','resumen','indicacion','nota'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'paciente_id');
    }
    

}
