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
        Schema::create('shopping_order_products', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id');

            $table->integer("product_ref");
            $table->string('sku')->nullable();


            $table->string("name");
            $table->float('price');
            $table->float('sale_price')->nullable();
            $table->float('qty');



//
            $table->foreign('order_id')->references('id')->on('shopping_orders')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_order_products');
    }
};
