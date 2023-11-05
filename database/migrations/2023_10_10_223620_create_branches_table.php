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
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('direction')->nullable();

            $table->integer('is_active')->default(1);
            $table->integer('postion')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
