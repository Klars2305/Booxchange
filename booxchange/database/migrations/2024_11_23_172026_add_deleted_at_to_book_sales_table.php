<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToBookSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_sales', function (Blueprint $table) {
            $table->softDeletes(); // Adds a deleted_at column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_sales', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Removes the deleted_at column
        });
    }
}
