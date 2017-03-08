<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'alumnos';
	protected $primaryKey = 'CUR_id';
    protected $fillable = [
        'CUR_nombre',
        'PRO_id'
    ];

    public function alumno()
    {
        return $this->belongsTo('SimulatorENUF\Models\Alumno');
    }

    public function unidad()
    {
        return $this->belongsTo('SimulatorENUF\Models\Unidad');
    }

     public function profesor()
    {
        return $this->belongsTo('SimulatorENUF\Models\Profesor');
    }
}
