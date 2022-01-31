<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;
use Shakurov\Coinbase\Models\CoinbaseWebhookCall;

class HandleFailedCharge implements ShouldQueue
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
        $ref = $charge['event']['data']['metadata']['ref'];
//        
        DB::table('cointrades')->where('ref', '=', $ref)->update(['status'=>'failed']);
    }
}
