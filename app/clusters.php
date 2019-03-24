<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clusters extends Model
{
    //
    protected $table = 'clusters';

    protected $primaryKey = 'id';
    public function clientinfos()
    {
        return $this->hasMany('App\clientinfo');
    }
}
