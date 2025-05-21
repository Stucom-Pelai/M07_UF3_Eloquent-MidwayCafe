<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('name', 255);
            $table->string('pay_method')->nullable();
            $table->decimal('price', 8, 2);
            $table->decimal('product_id', 8, 0);
            $table->string('product_order')->nullable();
            $table->date('purchase_date')->nullable();
            $table->decimal('quantity', 8, 0);
            $table->string('shipping_address')->nullable();
            $table->decimal('subtotal', 10, 2);
            $table->string('delivery_time')->nullable(); // Si la hora es en formato string
            $table->unsignedBigInteger('coupon_id')->nullable(); // <- Añadido
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
