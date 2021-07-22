<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function transactions(){
      return $this->hasMany('App\Models\Transaction');
    }

    public function profile(){
        return $this->hasOne('App\Models\Profile');
    }

    public function bank(){
        return $this->hasOne('App\Models\Bank');
    }

    public function withdrawal(){
        return $this->hasMany('App\Models\Withdrawal');
    }

    public function giftcard(){
        return $this->hasMany('App\Models\Giftcard');
    }

    public function messages(){
        return $this->hasMany('App\Models\Message');
    }

    public function cardtrades(){
        return $this->hasMany('App\Models\Cardtrade');
    }

    public function cointrades(){
        return $this->hasMany('App\Models\Cointrade');
    }

    public function bitcoin(){
        return $this->hasOne('App\Models\Bitcoin');
    }


}