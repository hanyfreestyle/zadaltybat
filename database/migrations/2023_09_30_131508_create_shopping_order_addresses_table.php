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
        Schema::create('shopping_order_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
           /// $table->unsignedBigInteger('order_id');

            $table->string("name");
            $table->string("city");

            $table->text("address");
            $table->string("recipient_name");
            $table->string("phone");
            $table->string("phone_option")->nullable();
            $table->text('notes')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_order_addresses');
    }
};
