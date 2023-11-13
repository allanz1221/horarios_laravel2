<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Generacione
 *
 * @property $id
 * @property $nombre
 * @property $semestre_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Materia[] $materias
 * @property Semestre $semestre
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Generacione extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'semestre_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','semestre_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materias()
    {
        return $this->hasMany('App\Models\Materia', 'generacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function semestre()
    {
        return $this->hasOne('App\Models\Semestre', 'id', 'semestre_id');
    }
    

}
