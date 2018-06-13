<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';

    public function komentar_storitev() {
        return $this->belongsTo('App\Storitev');
    }

}
