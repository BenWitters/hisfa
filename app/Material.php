<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materials';

    public function materialtype()
    {
        return $this->hasOne('App\Materialtype', 'id', 'material_type_id');
    }
}
