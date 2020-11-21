<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clusters extends Model {

    // Table Name
    protected $table = 'clusters';
    // Primary Key
    protected $primaryKey = 'id';
    // Timestamp
    public $timestamps = false;

    // Relationships
    public function clientinfos() {
        return $this->hasMany('App\clientinfo');
    }
}
