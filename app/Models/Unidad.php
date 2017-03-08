

<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidads';
	protected $primaryKey = 'UNI_id';
    protected $fillable = [
        'UNI_nombre',
        'UNI_fecha_final',
        'CUR_id'
    ];
    
    public function examen()
    {
        return $this->belongsTo('SimulatorENUF\Models\Examen');
    }

    #uno a muchos curso
    public function curso()
    {
        return $this->hasMany('SimulatorENUF\Models\Curso');
    }
}
