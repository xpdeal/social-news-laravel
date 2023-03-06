<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(0);
            $table->uuid('uuid');
            $table->foreignId('user_id')->index();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('description')->nullable();
            $table->text('post');
            $table->json('metadata')->nullable();
            $table->dateTime('published_at')->useCurrent();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
