<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cointrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'btcAmount', 'usdAmount', 'ngnAmount', 'ref', 'status', 'coin',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
