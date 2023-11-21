<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('trx_num');
            $table->foreignId('user_id');
            $table->foreignId('item_id');
            $table->string('uid');
            $table->string('serverid');
            $table->foreignId('nominal_id');
            $table->string('payment');
            $table->string('account_name');
            $table->string('whatsapp');
            $table->boolean('status')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
