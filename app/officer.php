<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class officer extends Model {
    
    // Table Name
    protected $table = 'officers';
    // Primary Key
    protected $primaryKey = 'id';
    // Timestamp
    public $timestamps = false;
}
