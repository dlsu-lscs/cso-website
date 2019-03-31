<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientlogos extends Model
{
    //
    protected $table = 'clientlogos';

    protected $primaryKey = 'id';
    public function client()
    {
        return $this->hasOne('App\client');
    }
}
