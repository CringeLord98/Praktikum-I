<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storitev extends Model
{
    protected $table = 'storitev';

    public function storitev_narocilo() {
        return $this->belongsTo('App/Narocilo');
    }

    public function storitev_komentar() {
        return $this->hasMany('App/Komentar');
    }

    public function storitev_ocena() {
        return $this->hasMany('App/Ocena');
    }

    public function storitev_kategorija() {
        return $this->belongsTo('App/Kategorija');
    }

    public function storitev_user() {
        return $this->belongsTo('App/User');
    }

    public static function boot()
    {
        parent::boot();    
    
        // cause a delete of a product to cascade to children so they are also deleted
        static::deleted(function($storitev)
        {
            $storitev->storitev_narocilo()->delete();
            $storitev->storitev_komentar()->delete();
            $storitev->storitev_ocena()->delete();
        });
    }
}
