<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'students';

	protected $fillable = [
		'user_id', 'service_id', 'numero_control', 'nombre', 'semestre', 'carrera', 't_sangre', 'tel_emerg',
		'direccion', 'tel_propio', 'alergia'
	];

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
    public function user() 
    {
        return $this->belongsTo('App\User');
    }

}
