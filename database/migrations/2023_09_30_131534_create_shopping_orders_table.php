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
        Schema::create('shopping_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('address_id');

            $table->uuid()->unique();
            $table->dateTime('order_date');
            $table->string('invoice_number')->nullable();
            $table->boolean("status")->default(1);
            $table->float('total')->default(0);
            $table->integer('units');

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('users_customers')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('shopping_order_addresses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_orders');
    }
};
