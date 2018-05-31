<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StanjeNarocila extends Model
{
    protected $table = 'stanje_narocila';

    public function stanje_narocilo() {
        return $this->hasMany('App/Narocilo');
    }
}
