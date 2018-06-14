<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','surname', 'email', 'password','davcna','telefon','slika','regija_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_regija() {
        return $this->belongsTo('App\Naslov');
    }

    public function user_storitev() {
        return $this->hasMany('App\Storitev');
    }
    public function user_narocila() {
        return $this->hasMany('App\Narocilo');
    }

    public static function boot()
    {
        parent::boot();    
    
        // cause a delete of a product to cascade to children so they are also deleted
        static::deleted(function($user)
        {
            $user->user_storitev()->delete();
        });
    }

}
