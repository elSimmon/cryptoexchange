<?php

namespace App\Models;

use App\Withdrawal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingPayment extends Model
{
    use HasFactory;

    protected $fillable = ['wallet_id', 'withdrawal_id', 'user_id', 'amount'];

    public function wallet(){
        return $this->belongsTo(Wallet::class);
    }

    public function withdrawal(){
        return $this->belongsTo(Withdrawal::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
