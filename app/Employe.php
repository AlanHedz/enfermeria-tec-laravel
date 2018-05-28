<?php

namespace App;

use App\Service;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $table = 'employes';

	protected $fillable = ['user_id', 'service_id', 'num_ficha', 'nombre', 'horario', 'puesto'];

    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    public function user() 
    {
        return $this->belongsTo('App\User');
    }

}
