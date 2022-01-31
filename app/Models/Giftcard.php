<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giftcard extends Model
{
    use HasFactory;

    protected $fillable = [
        'country', 'type', 'denomination', 'rate', 'card_category_id', 'min', 'max'
    ];

    public function card_category(){
        return $this->belongsTo(CardCategory::class, 'card_category_id');
    }

    public function cardtrades(){
        return $this->hasMany(Cardtrade::class);
    }
}
