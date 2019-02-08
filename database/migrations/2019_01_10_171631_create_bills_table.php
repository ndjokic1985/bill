<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration {

    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('bill_categories');
            /*     $table->unsignedInteger('user_id');
                 $table->foreign('user_id')->references('id')->on('users');*/
            $table->timestamp('period');
            $table->double('amount');
            $table->boolean('paid')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() {
        Schema::dropIfExists('bills');
    }
}
