<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Naslov extends Model
{
    protected $table = 'naslov';

    public function naslov_user() {
        return $this->belongsTo('App/User');
    }
}
