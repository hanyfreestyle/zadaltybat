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
        Schema::create('opening_hours', function (Blueprint $table) {
            $table->id();
            $table->integer('day');
            $table->integer('postion')->default(0);
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();

            $table->string('open_from')->nullable();
            $table->string('open_to')->nullable();
            $table->string('delivery_from')->nullable();
            $table->string('delivery_to')->nullable();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('opening_hours');
    }
};
