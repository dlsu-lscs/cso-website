<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientinfo extends Model
{
    //
    protected $table = 'clientinfos';

    protected $primaryKey = 'id';
    public $timestamps = false;
    public function client()
    {
        return $this->hasOne('App\client');
    }
}
