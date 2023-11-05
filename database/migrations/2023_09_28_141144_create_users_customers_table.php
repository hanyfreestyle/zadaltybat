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
        Schema::create('users_customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('company_name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('phone')->unique();
            $table->string('whatsapp')->nullable();
            $table->string('land_phone')->nullable();

            $table->integer('city_id')->nullable();

            $table->integer('status')->default(1);
            $table->boolean("is_active")->default(true);

            $table->string('photo')->nullable();
            $table->string('photo_thum_1')->nullable();


            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('password_temp')->nullable();
            $table->dateTime("last_login")->nullable();
            //$table->string('password_temp')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_customers');
    }
};
