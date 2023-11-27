<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $nombre
 * @property $base
 * @property $fecha_nacimiento
 * @property $categoria
 * @property $comision
 * @property $desc_comision
 * @property $perfil
 * @property $fecha_contrato_inicio
 * @property $fecha_contrato_fin
 * @property $fecha_horario
 * @property $pe_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario[] $horarios
 * @property Materia[] $materias
 * @property Pe $pe
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'base' => 'required',
		'fecha_nacimiento' => 'required',
		'categoria' => 'required',
		'comision' => 'required',
		'desc_comision' => 'required',
		'perfil' => 'required',
		'fecha_contrato_inicio' => 'required',
		'fecha_contrato_fin' => 'required',
		'fecha_horario' => 'required',
		'pe_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','base','fecha_nacimiento','categoria','comision','desc_comision','perfil','fecha_contrato_inicio','fecha_contrato_fin','fecha_horario','pe_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'docente_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materias()
    {
        return $this->hasMany('App\Models\Materia', 'materia_id', 'id');
    }
        
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pe()
    {
        return $this->hasOne('App\Models\Pe', 'id', 'pe_id');
    }
    

}
