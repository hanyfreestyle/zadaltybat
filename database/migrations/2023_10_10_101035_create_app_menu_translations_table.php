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
        Schema::create('app_menu_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('menu_id')->unsigned();
            $table->string('locale')->index();

            $table->string('url')->nullable();
            $table->string('label')->nullable();
            $table->integer('icon')->nullable();
            $table->integer('title')->default(1);

            $table->unique(['menu_id','locale']);
            $table->foreign('menu_id')->references('id')->on('app_menus')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_menu_translations');
    }
};
