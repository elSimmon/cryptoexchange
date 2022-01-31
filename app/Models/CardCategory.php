<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardCategory extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'image',
    ];

    public function giftcards()
    {
        return $this->hasMany('App\Models\Giftcard', 'card_category_id', 'id');
    }

    public function cardtrades(){
        return $this->hasMany(Cardtrade::class);
    }

    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();
        self::deleting(function($card_category) { // before delete() method call this
            $card_category->giftcards()->each(function($giftcard) {
                $giftcard->delete(); // <-- direct deletion
            });
        });
    }
}
