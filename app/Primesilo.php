<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Primesilo extends Model
{

    protected $table = 'primesilos';

    protected $fillable = [
        'prime_silo_number',
        'prime_full_percentage',
    ];

    public function material()
    {
        return $this->hasOne('App\Material', 'material_id', 'material_id');
    }
}
