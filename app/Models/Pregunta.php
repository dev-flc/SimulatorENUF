<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';
	protected $primaryKey = 'PRE_id';
    protected $fillable = [
        'PRE_nombre',
        'PRE_respuestas',
        'UNI_id',
        'CUR_id'
    ];


    public function respuestas()
    {
        return $this->belongsTo('SimulatorENUF\Models\Respuesta');
    }

     #uno a muchos examen
    public function unidad()
    {
    	return $this->hasMany('SimulatorENUF\Models\Unidad');
    }
    #uno a uno  tipo
    public function curso()
    {
        return $this->hasOne('SimulatorENUF\Models\Curso');
    }
}

