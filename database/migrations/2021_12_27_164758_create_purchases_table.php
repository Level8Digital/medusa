<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email', 100);
            $table->string('username', 35);
            $table->boolean('bro')->nullable();
            $table->boolean('pao')->nullable();
            $table->boolean('mnas')->nullable();
            $table->boolean('mspy')->nullable();
            $table->boolean('other1')->nullable();
            $table->boolean('other2')->nullable();
            $table->boolean('other3')->nullable();
            $table->boolean('other4')->nullable();
            $table->boolean('access_granted')->default(false);
            $table->boolean('confirm_tv');
            $table->boolean('agree_terms');
            $table->boolean('is_paid');
            $table->string('payment_type', 10);
            $table->string('paypal_id', 100)->nullable();
            $table->float('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
