<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    //

    protected $table = 'blocks';

    public function blocktype()
    {
        return $this->belongsTo('App\Blocktypes', 'block_type_id', 'id');
    }
}
