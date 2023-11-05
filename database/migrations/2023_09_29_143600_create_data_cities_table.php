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
        Schema::create('data_cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name")->unique();
            $table->string("name_en")->unique();
            $table->boolean("is_active")->default(true);
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_cities');
    }
};
