<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cat_id')->unique()->index();
            $table->string('view_name')->nullable();
            $table->integer('banner_id')->nullable();
            $table->string("photo")->nullable();
            $table->string("photo_thum_1")->nullable();
            $table->boolean("is_active")->default(true);
            $table->boolean("menu_main")->default(false);
            $table->boolean("menu_footer")->default(false);
            $table->integer("postion")->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
