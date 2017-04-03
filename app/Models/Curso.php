<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  protected $table = 'cursos';
	protected $primaryKey = 'CUR_id';
  protected $fillable = [
        'CUR_nombre',
        'CUR_descripcion',
        'CUR_cupos',
        'CUR_fecha',
        'CUR_clave',
        'CUR_foto',
        'CUR_estatus',
        'PRO_id'
    ];



    public function unidad()
    {
        return $this->belongsTo('SimulatorENUF\Models\Unidad');
    }

     public function profesor()
    {
        return $this->belongsTo('SimulatorENUF\Models\Profesor');
    }

    public function curalu()
    {
        return $this->belongsTo('SimulatorENUF\Models\CurAlu');
    }
}
