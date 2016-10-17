<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blocktype extends Model
{
    // We zeggen hoe de tabel noemt omdat de naam van het model niet overeenkomt met de naam van de tabel
    protected $table = 'blocktypes';

    public function waste(){
        return $this->belongsTo('App\Waste');
    }
}
