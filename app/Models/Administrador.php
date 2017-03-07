<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administradors';
	protected $primaryKey = 'ADM_id';
    protected $fillable = [
        'ADM_nombre',
        'ADM_apellido_p',
        'ADM_apellido_m',
        'ADM_sexo',
        'USE_id',
        'DIR_id'
    ];
}
