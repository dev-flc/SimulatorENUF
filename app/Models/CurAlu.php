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
        'ALU_id',
        'CUAL_intentos',
        'CUAL_calificacion'
    ];
    #uno a muchos cursos
    public function curso()
    {
        return $this->hasMany(Curso::class);
    }

    #uno a muchos alumnos
    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }
}
