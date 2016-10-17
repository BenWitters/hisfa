<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Primesilo extends Model
{
    protected $table = 'primesilos';

    public function material()
    {
        return $this->hasOne('App\Material', 'material_id', 'material_id');
    }
}
