<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Historia
 *
 * @property $id
 * @property $paciente_id
 * @property $ea
 * @property $app
 * @property $apf
 * @property $peso
 * @property $talla
 * @property $imc
 * @property $temperatura
 * @property $ta
 * @property $fc
 * @property $fr
 * @property $cabeza
 * @property $torax
 * @property $abdomen
 * @property $gluteos
 * @property $otros
 * @property $laboratorio
 * @property $imagen
 * @property $diagnostico
 * @property $tratamiento
 * @property $created_at
 * @property $updated_at
 *
 * @property Paciente $paciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Historia extends Model
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
    protected $fillable = ['paciente_id','ea','app','apf','peso','talla','imc','temperatura','ta','fc','fr','cabeza','torax','abdomen','gluteos','otros','laboratorio','imagen','diagnostico','tratamiento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'paciente_id');
    }
    

}
