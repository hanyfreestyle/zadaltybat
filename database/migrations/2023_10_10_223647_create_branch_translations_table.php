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
        Schema::create('branch_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('branch_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title')->nullable();
            $table->text('address')->nullable();
            $table->text('work_hours')->nullable();

            $table->unique(['branch_id','locale']);
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('branch_translations');
    }
};
