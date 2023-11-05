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
        Schema::create('config_web_privacy_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('privacy_id')->unsigned();
            $table->string('locale')->index();

            $table->string('h1')->nullable();
            $table->string('h2')->nullable();
            $table->text('des')->nullable();
            $table->text('lists')->nullable();

            $table->unique(['privacy_id','locale']);
            $table->foreign('privacy_id')->references('id')->on('config_web_privacies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_web_privacy_translations');
    }
};
