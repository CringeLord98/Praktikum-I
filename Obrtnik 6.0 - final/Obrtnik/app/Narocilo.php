<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Narocilo extends Model
{
    protected $table = 'narocilo';

    public function narocilo_stanje() {
        return $this->belongsTo('App\StanjeNarocila');
    }

    public function narocilo_storitev() {
        return $this->belongsTo('App\Storitev');
    }
}
