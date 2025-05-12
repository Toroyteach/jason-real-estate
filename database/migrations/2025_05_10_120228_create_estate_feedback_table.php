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
        Schema::create('estate_feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estate_id')->unsigned();
            $table->foreign('estate_id')->references('id')->on('estates')->onDelete('cascade');
            $table->string('name');
            $table->text('message');
            $table->unsignedTinyInteger('rating')->default(5);
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estate_feedback');
    }
};
