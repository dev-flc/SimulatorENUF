<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesors';
	protected $primaryKey = 'PRO_id';
    protected $fillable = [
        'PRO_nombre',
        'PRO_apellido_p',
        'PRO_apellido_m',
        'PRO_sexo',
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

    #uno a muchos curso
    public function curso()
    {
        return $this->hasMany('SimulatorENUF\Models\Curso');
    }

    
}
