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
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->text('excerpt')->nullable();
            $table->string('cover_image')->nullable();
            $table->unsignedInteger('views_count')->default(0);
            $table->unsignedInteger('likes_count')->default(0);
            $table->boolean('is_published')->default(false);
            $table->boolean('allow_comments')->default(true);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('blog_media', function (Blueprint $table) {
            $table->id();
            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->enum('type', ['image', 'video'])->default('image');
            $table->string('file_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('blog_media');
    }
};
