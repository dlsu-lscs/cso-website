<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    //
    protected $table = 'clients';

    protected $primaryKey = 'id';

    public function clientinfos()
    {
        return $this->hasOne('App\clientinfo');
    }

    public function clientlogo()
    {
        return $this->hasOne('App\clientlogos');
    }
}
