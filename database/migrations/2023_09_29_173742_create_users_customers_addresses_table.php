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
        Schema::create('users_customers_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid()->unique();
            $table->unsignedBigInteger('customer_id');

            $table->string("name");
            $table->unsignedBigInteger('city_id');
            $table->text("address");
            $table->string("recipient_name");
            $table->string("phone");
            $table->string("phone_option")->nullable();
            $table->boolean("is_default")->default(false);

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('users_customers')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_customers_addresses');
    }
};
