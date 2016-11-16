<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materialtypes extends Model
{
    protected $fillable = [
        'material_type_name',
        'material_type_picture'
    ];

    protected $table = 'materialtypes';

    public function primesilo()
 	{
       return $this->hasMany('App\Primesilo');
    }
}
