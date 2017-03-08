<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direccions';
	protected $primaryKey = 'DIR_id';
    protected $fillable = [
        'DIR_calle',
        'DIR_colonia',
        'DIR_estado',
        'DIR_ciudad',
        'DIR_pais',
        'DIR_cp'
    ];

    #uno a uno Administrador
    public function administrador()
    {
        return $this->belongsTo('SimulatorENUF\Models\Administrador');
    }

    #uno a uno Profesor
    public function profesor()
    {
        return $this->belongsTo('SimulatorENUF\Models\Profesor');
    }

    #uno a uno Profesor
    public function alumno()
    {
        return $this->belongsTo('SimulatorENUF\Models\Alumno');
    }
}
