<?php

namespace SimulatorENUF;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','foto', 'email', 'password','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
    #$table->'alumno','profesor','administrador';

    public function alumnologin()
    {
        return $this->type === 'alumno';
    }
    public function profesorlogin()
    {
        return $this->type === 'profesor';
    }
    public function adminlogin()
    {
        return $this->type === 'administrador';
    }

}
