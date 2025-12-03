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
    public function getHighestBidAttribute()
{
    // Si no hay pujas, devuelve el precio inicial
    if ($this->bids->isEmpty()) {
        return $this->starting_price;
    }

    return $this->bids->max('amount');  // Usa el campo donde guardas el monto de la puja
}
}
