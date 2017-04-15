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
        'UNI_id',
        'TIP_id',
        'ALU_id',
    ];



    #uno a muchos examen
    public function unidad()
    {
        return $this->hasMany('SimulatorENUF\Models\Unidad');
    }

    #uno a muchos alumnos
    public function alumno()
    {
        return $this->hasMany('SimulatorENUF\Models\Alumno');
    }

    #uno a uno  tipo
    public function tipo()
    {
        return $this->hasOne('SimulatorENUF\Models\Tipo');
    }
}
