<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_subscription', function (Blueprint $table) {
            $table->id();
            $table->dateTime('started_at');
            $table->dateTime('ended_at');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('subscription_id');
            $table->timestamps();


            $table->foreign('customer_id')->on('customers')->references('id')->onDelete('cascade');
            $table->foreign('subscription_id')->on('subscriptions')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_subscription');
    }
}
