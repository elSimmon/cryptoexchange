<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardtradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardtrades', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('card_category_id');
            $table->bigInteger('giftcard_id');
            $table->double('original_card_amount');
            $table->double('naira_worth');
            $table->string('status')->default('pending');
            $table->string('card_picture')->nullable();
            $table->string('receipt_picture')->nullable();
            $table->string('e_code')->nullable();
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
        Schema::dropIfExists('cardtrades');
    }
}
