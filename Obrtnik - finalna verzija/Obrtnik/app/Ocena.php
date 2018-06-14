<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocena extends Model
{
    protected $table = 'ocena';

    public function ocena_storitev() {
        return $this->belongsTo('App\Storitev');
    }
}
