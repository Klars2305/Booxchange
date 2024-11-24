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
        Schema::create('traders', function (Blueprint $table) {
            $table->id();
            $table->string('tradername');
            $table->string('bookTitle');
            $table->string('bookImage');
            $table->string('author');
            $table->text('bookDescription');
            $table->string('bookGenre');
            $table->string('bookCondition');
            $table->string('preferItemsToTrade');
            $table->unsignedBigInteger('owner_id');  // Add owner_id as unsigned big integer
            $table->string('status');
            $table->timestamps();
        
            // Foreign key constraint
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
        
            
            // Adding a status column to track the trade status
            $table->enum('status', ['available', 'pending', 'accepted', 'rejected', 'traded'])->default('available');
            
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traders');
    }
};
