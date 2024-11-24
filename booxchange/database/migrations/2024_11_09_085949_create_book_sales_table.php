<?php
// database/migrations/xxxx_xx_xx_create_book_sales_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookSalesTable extends Migration
{
   // Example migration for BookSale table
public function up()
{
    Schema::create('book_sales', function (Blueprint $table) {
        $table->id();
        $table->string('sellername');
        $table->string('bookTitle');
        $table->string('bookImage');
        $table->string('author');
        $table->text('bookDescription');
        $table->string('bookGenre');
        $table->string('bookCondition');
        $table->decimal('price', 8, 2);
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('book_sales');
    }
}
