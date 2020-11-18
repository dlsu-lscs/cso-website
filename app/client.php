<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model {

    // Table Name
    protected $table = 'clients';
    // Primary Key
    protected $primaryKey = 'id';
    // Timestamp
    public $timestamps = false;

    // Relationships
    public function clientinfos() {
        return $this->hasOne('App\clientinfo');
    }

    public function clientlogo() {
        return $this->hasOne('App\clientlogos');
    }
}
