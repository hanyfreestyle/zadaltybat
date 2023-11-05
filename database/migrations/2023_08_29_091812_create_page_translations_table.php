<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('page_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned();
            $table->string('locale')->index();
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->string('g_title')->nullable();
            $table->text('g_des')->nullable();
            $table->string('body_h1')->nullable();
            $table->string('breadcrumb')->nullable();

            $table->unique(['page_id','locale']);
            $table->unique(['locale','slug']);

            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('page_translations');
    }
};
