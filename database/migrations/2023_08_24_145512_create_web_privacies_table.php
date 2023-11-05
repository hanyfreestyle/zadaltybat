<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.  cascade
     */
    public function up(): void
    {
        Schema::create('config_web_privacies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->integer("postion")->default(0);
            $table->boolean("is_active")->default(true);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_web_privacies');
    }
};
