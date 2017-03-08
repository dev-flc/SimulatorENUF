<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $table = 'examens';
	protected $primaryKey = 'EXA_id';
    protected $fillable = [
        'EXA_nombre',
        'EXA_fecha',
        'EXA_hora',
        'EXA_calificacion',
        'EXA_tiempo',
        'EXA_intento',
        'UNI_id',
        'TIP_id'
    ];

    public function pregunta()
    {
        return $this->belongsTo('SimulatorENUF\Models\Pregunta');
    }

    #uno a muchos examen
    public function unidad()
    {
        return $this->hasMany('SimulatorENUF\Models\Unidad');
    }

    #uno a uno  tipo
    public function tipo()
    {
        return $this->hasOne('SimulatorENUF\Models\Tipo');
    }

}
