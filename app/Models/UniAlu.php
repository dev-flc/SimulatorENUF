<?php

namespace SimulatorENUF\Models;

use Illuminate\Database\Eloquent\Model;

class UniAlu extends Model
{
    protected $table = 'uni_alus';
	protected $primaryKey = 'UNAL_id';
    protected $fillable = ['UNI_id','ALU_id','UNAL_calificacion','UNAL_intentos'];
}
