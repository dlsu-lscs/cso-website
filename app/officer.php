<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class officer extends Model
{
    //
    protected $table = 'officers';

    protected $primaryKey = 'id';
    public $timestamps = false;
}
