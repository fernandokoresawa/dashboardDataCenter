<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table = 'sensores';

    public function historicos()
    {
        return $this->hasMany('App\Historico', 'sensor_id');
    }
}

// @foreach($marca->produtos as $produto)
