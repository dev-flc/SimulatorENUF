<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
	protected $primaryKey = 'ADM_id';
    protected $fillable = [
        'ALU_nombre',
        'ALU_apellido_p',
        'ALU_apellido_m',
        'ALU_edad',
        'ALU_sexo',
        'ALU_matricula',
        'USE_id',
        'DIR_id',
        'CUR_id'
    ];
    #uno a uno  usuario
    public function user()
    {
        return $this->hasOne('SimulatorENUF\User');
    }

    #uno a uno  direccion
    public function direccion()
    {
        return $this->hasOne('SimulatorENUF\Direccion');
    }

     #uno a muchos curso
    public function curso()
    {
        return $this->hasMany('SimulatorENUF\Models\Curso');
    }
}
