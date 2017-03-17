<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = 'respuestas';
	protected $primaryKey = 'RES_id';
    protected $fillable = [
        'RES_nombre',
        'PRE_id',
        'TIP_id'
    ];

    #uno a muchos pregunta
    public function pregunta()
    {
    	return $this->hasMany('SimulatorENUF\Models\Pregunta');
    }

    #uno a uno  tipo
    public function tipo()
    {
        return $this->hasOne('SimulatorENUF\Models\Tipo');
    }
}
