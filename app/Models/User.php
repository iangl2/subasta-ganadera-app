<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

   

    protected $fillable = [
        'full_name', 'type', 'email', 'phone',
        'password', 'registration_date', 'active'
    ];

    protected $hidden = ['password', 'remember_token'];

    public function cows() {
        return $this->hasMany(Cow::class, 'user_id');
    }

    public function auctions() {
        return $this->hasMany(Auction::class, 'seller_id');
    }

    public function bids() {
        return $this->hasMany(Bid::class, 'user_id');
    }
}
