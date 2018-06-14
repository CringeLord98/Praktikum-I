<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slika extends Model
{
    protected $table = 'slika';

    public function slika_storitev() {
        return $this->belongsTo('App\Storitev');
    }
}
