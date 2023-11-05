<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('app_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum("type", ['side','user','cart'])->nullable();
            $table->integer('postion')->default(0);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('app_menus');
    }
};
