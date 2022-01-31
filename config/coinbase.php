<?php


return [
    'apiKey' => env('COINBASE_API_KEY'),
    'apiVersion' => env('COINBASE_API_VERSION'),

    'webhookSecret' => env('COINBASE_WEBHOOK_SECRET'),
    'webhookJobs' => [
         'charge:created' => \App\Jobs\HandleCreatedCharge::class,
         'charge:confirmed' => \App\Jobs\HandleConfirmedCharge::class,
         'charge:failed' => \App\Jobs\HandleFailedCharge::class,
         'charge:delayed' => \App\Jobs\HandleDelayedCharge::class,
         'charge:pending' => \App\Jobs\HandlePendingCharge::class,
         'charge:resolved' => \App\Jobs\HandleResolvedCharge::class,
    ],
    'webhookModel' => Shakurov\Coinbase\Models\CoinbaseWebhookCall::class,
];
