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
        Schema::create('_order_', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->string('Salername');
            $table->string('bookTitle');
            $table->string('bookImage');
            $table->string('author');
            $table->text('bookDescription');
            $table->string('bookGenre');
            $table->string('bookCondition');
            $table->decimal('price', 8, 2);
            $table->string('delivery_loc');
            $table->string('Transaction date and time');
            $table->string('total');
            $table->unsignedBigInteger('voucher_ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_order_');
    }
};
