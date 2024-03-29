<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blocktypes extends Model
{
    protected $fillable = [
        'block_type_name',
    ];

    protected $table = 'blocktypes';

    public function blocks()
    {
        return $this->hasMany('App\Block');
    }
}
