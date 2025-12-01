<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    // protected $primaryKey = 'auction_id';
    protected $fillable = [
        'cow_id', 'seller_id', 'name', 'status', 
        'start_date', 'end_date', 'starting_price', 
        'location', 'description', 'highest_bid'
    ];

    public function cow() {
        return $this->belongsTo(Cow::class, 'cow_id');
    }

    public function seller() {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function bids() {
        return $this->hasMany(Bid::class, 'auction_id');
    }
}
