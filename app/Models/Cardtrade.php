<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardtrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'card_category_id', 'giftcard_id', 'original_card_amount', 'card_picture', 'receipt_picture', 'status', 'message', 'naira_worth', 'e_code',
    ];

    public function giftcard(){
        return $this->belongsTo(Giftcard::class);
    }

    public function card_category(){
        return $this->belongsTo(CardCategory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
