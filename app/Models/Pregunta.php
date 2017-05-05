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
        'UNI_id'
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
}
 