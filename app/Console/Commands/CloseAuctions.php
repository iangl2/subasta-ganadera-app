<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Auction;
use Carbon\Carbon;

class CloseAuctions extends Command
{
    protected $signature = 'auctions:close';
    protected $description = 'Cierra subastas terminadas y transfiere la vaca al ganador';

    public function handle()
    {
        $auctions = Auction::with(['bids', 'cow'])
            ->where('end_date', '<=', Carbon::now())
            ->get();

        foreach ($auctions as $auction) {


            $highestBid = $auction->bids()
                ->orderByDesc('amount')
                ->first();

            if ($highestBid) {
                $auction->cow->update([
                    'user_id' => $highestBid->user_id,
                    'status'  => 'sold',
                ]);
            }
        }

        $this->info('Subastas cerradas correctamente.');
    }
}
