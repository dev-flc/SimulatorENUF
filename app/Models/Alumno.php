<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
	  protected $primaryKey = 'ALU_id';
    protected $fillable = [
        'ALU_nombre',
        'ALU_apellido_p',
        'ALU_apellido_m',
        'ALU_edad',
        'ALU_sexo',
        'ALU_matricula',
        'USE_id',
        'DIR_id'
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

    public function examen()
    {
        return $this->belongsTo('SimulatorENUF\Models\Examen');
    }

    public function curalu()
    {
        return $this->belongsTo(CurAlu::class);
    }
}
