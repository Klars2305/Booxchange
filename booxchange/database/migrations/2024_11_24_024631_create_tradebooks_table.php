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
        Schema::create('tradebooks', function (Blueprint $table) {
            $table->id();
            $table->string('tradername');
            $table->string('bookTitle');
            $table->string('bookImage');
            $table->string('author');
            $table->text('bookDescription');
            $table->string('bookCondition');
            $table->string('prefferedItemToTrade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tradebooks');
    }
};
