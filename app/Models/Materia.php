<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $nombre
 * @property $clave
 * @property $plan
 * @property $horas
 * @property $horas_aula
 * @property $horas_pla
 * @property $generacion_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Generacione $generacione
 * @property Horario[] $horarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'clave' => 'required',
		'plan' => 'required',
		'horas' => 'required',
		'horas_aula' => 'required',
		'horas_pla' => 'required',
		'generacion_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','clave','plan','horas','horas_aula','horas_pla','generacion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function generacione()
    {
        return $this->hasOne('App\Models\Generacione', 'id', 'generacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'materia_id', 'id');
    }
    

}
