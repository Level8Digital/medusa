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
            // First save
            $table->id();
            $table->timestamps();
            $table->date('paid_at')->nullable();
            $table->string('email', 100);
            $table->string('username', 35);
            $table->string('access', 15);
            $table->boolean('access_granted')->default(false);
            $table->boolean('confirm_tv')->default(false);
            $table->boolean('agree_terms')->default(false);
            $table->float('total');
            $table->boolean('discount_applied')->default(false);
            $table->integer('discount_amount')->default(0);
            $table->string('referral_code')->default('None');
            // Second save
            $table->string('payment_type', 10)->default('Not-Paid');
            $table->boolean('is_paid')->default(false);
            $table->boolean('payment_issue')->default(false);
            $table->float('paid_total')->default(0.0);
            $table->string('paypal_id', 100)->default('Not-Paid');
            $table->date('expires_at')->nullable();
            // Possible future updates
            $table->string('other1')->nullable();
            $table->boolean('other2')->nullable();
            $table->string('other3')->nullable();
            $table->boolean('other4')->nullable();
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
