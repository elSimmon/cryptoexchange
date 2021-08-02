<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    public function bank(){
        return $this->belongsTo(Bank::class);
    }

    public function wallet(){
        return $this->belongsTo(Wallet::class);
    }
}
