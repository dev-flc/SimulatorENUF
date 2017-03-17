<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos';
	protected $primaryKey = 'TIP_id';
    protected $fillable = ['TIP_nombre'];
}

 	public function examen()
    {
        return $this->belongsTo('SimulatorENUF\Models\Examen');
    }

    public function respuesta()
    {
        return $this->belongsTo('SimulatorENUF\Models\Respuesta');
    }
