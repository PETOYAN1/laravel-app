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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->longText('message');
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->bigInteger('post_id')->unsigned()->index()->nullable();
            $table->bigInteger('replay_id')->unsigned()->index()->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('replay_id')->references('id')->on('follows');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
