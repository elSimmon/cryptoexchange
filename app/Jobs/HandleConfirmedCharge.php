<?php

namespace App\Jobs;

use App\Models\Cointrade;
use App\Models\User;
use App\Notifications\TradingNotification;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Shakurov\Coinbase\Models\CoinbaseWebhookCall;

class HandleConfirmedCharge implements ShouldQueue
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
        //retrieve charge details
        $charge = $this->webhookCall->payload;

        //store charge details as successful crypto trade
        $cointrade = new Cointrade();
        $cointrade->user_id = $charge['event']['data']['metadata']['user_id'];
        $cointrade->coin = $charge['event']['data']['metadata']['coin'];
        $cointrade->btcAmount = $charge['event']['data']['metadata']['btc'];
        $cointrade->usdAmount = $charge['event']['data']['metadata']['usd'];
        $cointrade->ngnAmount = $charge['event']['data']['metadata']['naira'];
        $cointrade->ref = $charge['event']['data']['metadata']['ref'];
        $cointrade->status = 'success';
        $cointrade->save();

        //increase wallet balance for user
        DB::table('wallets')->where('user_id', $charge['event']['data']['metadata']['user_id'])->increment('balance', $charge['event']['data']['metadata']['naira']);

        //send admin notification
        $users = User::all();

        $when = now()->addSeconds(5);
        foreach ($users as $user){
            if($user->role > 0){
                $user->notify((new TradingNotification())->delay($when));
            }
        }
    }
}
