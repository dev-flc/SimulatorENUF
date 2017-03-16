<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class CurAlu extends Model
{
  protected $table = 'cur_alus';
  protected $primaryKey = 'CUAL_id';
  protected $fillable = [
        'CUAL_estatus',
        'CUR_id',
        'ALU_id'
    ];
    #uno a muchos cursos
    public function curso()
    {
        return $this->hasMany('SimulatorENUF\Models\Curso');
    }

    #uno a muchos alumnos
    public function alumno()
    {
        return $this->hasMany('SimulatorENUF\Models\Alumno');
    }
}
