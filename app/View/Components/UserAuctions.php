<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserAuctions extends Component
{
    public $userAuction;

    public function __construct($auction)
    {
        $this->userAuction = $auction;
    }

    public function render()
    {
        return view('components.user-auctions');
    }
}
