<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $table = 'services';

	protected $fillable = ['cod_serv', 'diagnostico'];

    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function employes()
    {
        return $this->hasMany('App\Employe');
    }

}
