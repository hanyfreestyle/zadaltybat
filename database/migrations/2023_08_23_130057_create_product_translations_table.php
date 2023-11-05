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
        Schema::create('product_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->unsigned();
            $table->string('locale')->index();
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->longText('des')->nullable();

            $table->string('g_title')->nullable();
            $table->text('g_des')->nullable();

            $table->unique(['product_id','locale']);
            $table->unique(['locale','slug']);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_translations');
    }
};
