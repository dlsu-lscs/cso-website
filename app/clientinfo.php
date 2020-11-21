<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientinfo extends Model {

    // Table Name
    protected $table = 'clientinfos';
    // Primary Key
    protected $primaryKey = 'id';
    // Timestamp
    public $timestamps = false;

    // Relationships
    public function client() {
        return $this->hasOne('App\client');
    }
}
