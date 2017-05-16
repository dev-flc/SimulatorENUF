<?php
namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
	protected $primaryKey = 'CUR_id';
    protected $fillable = [
        'CUR_nombre',
        'CUR_descripcion',
        'CUR_cupos',
        'CUR_fecha',
        'CUR_clave',
        'CUR_foto',
        'CUR_estatus',
        'PRO_id',
        'CUR_fecha_inicio',
        'CUR_fecha_final',
        'CUR_calificacion',
        'CUR_intento',
        'CUR_estatus_examen',
        'CUR_tiempo',
        'CUR_numero_preguntas'
    ];
    public function unidad()
    {
        return $this->belongsTo('SimulatorENUF\Models\Unidad');
    }
    public function profesor()
    {
        return $this->belongsTo('SimulatorENUF\Models\Profesor');
    }
    public function curalu()
    {
        return $this->belongsTo('SimulatorENUF\Models\CurAlu');
    }
    public function pregunta()
    {
        return $this->belongsTo('SimulatorENUF\Models\Pregunta');
    }
}
