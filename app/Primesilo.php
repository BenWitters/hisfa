<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Primesilo extends Model
{

    protected $table = 'primesilos';

    protected $fillable = [
        'prime_silo_number',
        'prime_full_percentage',
        'material_id',
    ];

    public function material()
    {
        return $this->belongsTo('App\Materialtypes', 'material_id', 'id');
    }
}
