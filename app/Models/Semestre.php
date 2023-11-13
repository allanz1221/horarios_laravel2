<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Semestre
 *
 * @property $id
 * @property $nombre
 * @property $pe_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Generacione[] $generaciones
 * @property Pe $pe
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Semestre extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'pe_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','pe_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function generaciones()
    {
        return $this->hasMany('App\Models\Generacione', 'semestre_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pe()
    {
        return $this->hasOne('App\Models\Pe', 'id', 'pe_id');
    }
    

}
