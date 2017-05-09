<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class UniAlu extends Model
{
    protected $table = 'uni_alus';
	protected $primaryKey = 'UNAL_id';
    protected $fillable = ['UNI_id','ALU_id','UNAL_calificacion','UNAL_intentos'];
}
	
#uno a muchos cursos
    public function unidades()
    {
        return $this->hasMany('SimulatorENUF\Models\Unidad','UNI_id');
    }

    #uno a muchos alumnos
    public function alumnos()
    {
        return $this->hasMany('SimulatorENUF\Models\Alumno','ALU_id');
    }
