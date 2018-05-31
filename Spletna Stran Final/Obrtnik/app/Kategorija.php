<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    protected $table = 'kategorija';

    public function kategorija_storitev() {
        return $this->hasMany('App/Storitev');
    }
    
    
    anus
}
