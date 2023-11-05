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
        Schema::create('config_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('web_url')->nullable();
            $table->integer('web_status')->default('1');
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();


            $table->string('phone_num')->nullable();
            $table->string('whatsapp_num')->nullable();
            $table->string('phone_text')->nullable();
            $table->string('whatsapp_text')->nullable();

            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('def_url')->nullable();
            $table->string('google_api')->nullable();

            $table->integer('download_app')->default(0);
            $table->integer('top_offer')->default(0);

            $table->string('apple')->nullable();
            $table->string('android')->nullable();
            $table->string('windows')->nullable();


            $table->string('telegram_key')->nullable();
            $table->string('telegram_group')->nullable();
            $table->string('telegram_phone')->nullable();

            $table->string('whatsapp_key')->nullable();
            $table->string('whatsapp_send_to')->nullable();
            $table->text('notes')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_settings');
    }
};
