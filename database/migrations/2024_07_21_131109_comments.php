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
        Schema::create('comments', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->text('comment');
            $table->unsignedBigInteger('post_id');

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->timestamps();
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
