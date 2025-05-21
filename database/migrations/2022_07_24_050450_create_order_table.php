<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name')->nullable();
            $table->string('email', 30)->nullable();
            $table->string('phone', 20)->nullable();
            $table->double('amount')->nullable();
            $table->text('address')->nullable();
            $table->string('status', 10)->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('currency', 20)->nullable();
            // No timestamps defined in the original schema
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
