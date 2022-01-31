<?php

namespace App\Jobs;

use App\Models\Cointrade;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Shakurov\Coinbase\Models\CoinbaseWebhookCall;

class HandleCreatedCharge implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    //** @var \Shakurov\Coinbase\Models\CoinbaseWebhookCall */
    public $webhookCall;

    public function __construct(CoinbaseWebhookCall $webhookCall)
    {
        $this->webhookCall = $webhookCall;
    }

    public function handle()
    {
        $charge = $this->webhookCall->payload;

        $cointrade = new Cointrade();
        $cointrade->user_id = $charge['event']['data']['metadata']['user_id'];
        $cointrade->coin = $charge['event']['data']['metadata']['coin'];
        $cointrade->btcAmount = $charge['event']['data']['metadata']['btc'];
        $cointrade->usdAmount = $charge['event']['data']['metadata']['usd'];
        $cointrade->ngnAmount = $charge['event']['data']['metadata']['naira'];
        $cointrade->ref = $charge['event']['data']['metadata']['ref'];
        $cointrade->status = 'created';
        $cointrade->save();
//
//        DB::table('wallets')->where('user_id', $charge['event']['data']['metadata']['user_id'])->increment('balance', $charge['event']['data']['metadata']['naira']);
    }
}
