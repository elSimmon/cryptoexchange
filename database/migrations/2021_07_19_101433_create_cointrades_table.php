<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCointradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cointrades', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('coin')->default('BTC');
            $table->double('btcAmount');
            $table->double('usdAmount');
            $table->double('ngnAmount');
            $table->string('status')->default('pending');
            $table->string('ref')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cointrades');
    }
}
