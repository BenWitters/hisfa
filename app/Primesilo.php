<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Primesilo extends Model
{

    protected $table = 'primesilos';

    public function material()
    {
        return $this->belongsTo('App\Materialtypes', 'material_id', 'id');
    }
}
