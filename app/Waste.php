<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waste extends Model
{
    // We zeggen hoe de tabel noemt omdat de naam van het model niet overeenkomt met de naam van de tabel
    protected $table = 'wastesilos';

    public function blocktype()
    {
        return $this->hasOne('App\Blocktype', 'block_type_id', 'block_type_id');
    }
}
