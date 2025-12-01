<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    // protected $primaryKey = 'bid_id';
    protected $fillable = ['user_id', 'auction_id', 'amount', 'bid_date'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function auction() {
        return $this->belongsTo(Auction::class, 'auction_id');
    }
}
