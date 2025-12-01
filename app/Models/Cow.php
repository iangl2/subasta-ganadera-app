<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
    //   protected $primaryKey = 'cow_id';
    protected $fillable = ['user_id', 'weight', 'sex', 'breed', 'status', 'image'];

    public function seller() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function auctions() {
        return $this->hasMany(Auction::class, 'cow_id');
    }
}
