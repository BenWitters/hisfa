<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materialtypes extends Model
{
    protected $fillable = [
        'material_type_name'
    ];

    protected $table = 'materialtypes';

    public function primesilo()
 	{
       return $this->hasMany('App\Primesilo');
    }
}
