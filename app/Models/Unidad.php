<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidads';
	protected $primaryKey = 'UNI_id';
    protected $fillable = [
        'UNI_nombre',
        'UNI_foto',
        'UNI_material_apoyo',
        'UNI_fecha_final',
        'UNI_fecha_inicio',
        'UNI_tiempo',
        'UNI_calificacion',
        'UNI_intento',
        'UNI_numero_pregunta',
        'CUR_id'
    ];

    public function examen()
    {
        return $this->belongsTo('SimulatorENUF\Models\Examen');
    }

    #uno a muchos curso
    public function curso()
    {
        return $this->hasMany('SimulatorENUF\Models\Curso');
    }
    public function pregunta()
    {
        return $this->belongsTo('SimulatorENUF\Models\Pregunta');
    }
}
