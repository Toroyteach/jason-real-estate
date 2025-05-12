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
        Schema::create('estate_media', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estate_id')->unsigned();
            $table->foreign('estate_id')->references('id')->on('estates')->onDelete('cascade');
            $table->string('type'); // image or video
            $table->string('file_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estate_media');
    }
};
