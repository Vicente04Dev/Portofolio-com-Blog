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
        Schema::create('posts', function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->text('short_description');
            $table->longText('description');
            $table->string('image')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('situation_id');

            $table->foreign('situation_id')->references('id')->on('situations');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->foreign('category_id')->references('id')->on('category')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->timestamps();
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
