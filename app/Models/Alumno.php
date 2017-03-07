<?php

namespace App\Models;

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
}
