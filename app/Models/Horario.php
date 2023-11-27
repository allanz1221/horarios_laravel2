<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 *
 * @property $id
 * @property $materia_id
 * @property $salon_id
 * @property $start_time
 * @property $end_time
 * @property $hora_inicio
 * @property $hora_fin
 * @property $created_at
 * @property $updated_at
 *
 * @property Materia $materia
 * @property Salone $salone
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{
    
    static $rules = [
		'materia_id' => 'required',
		'salon_id' => 'required',
		'start_time' => 'required',
		'end_time' => 'required',
		'hora_inicio' => 'required',
		'hora_fin' => 'required',
        'dia' => 'required',
    ];

    protected $perPage = 20000;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['materia_id','salon_id','start_time','end_time','hora_inicio','hora_fin','dia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materia()
    {
        return $this->hasOne('App\Models\Materia', 'id', 'materia_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function salone()
    {
        return $this->hasOne('App\Models\Salone', 'id', 'salon_id');
    }
    

}
