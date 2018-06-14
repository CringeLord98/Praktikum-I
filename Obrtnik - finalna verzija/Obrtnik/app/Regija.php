<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regija extends Model
{
    protected $table = 'regija';

    public function regija_user() {
        return $this->hasMany('App\User');
    }
}
