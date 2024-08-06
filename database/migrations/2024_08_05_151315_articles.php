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
        Schema::create('articles' , function(Blueprint $table){

            $table->bigIncrements('id');
            $table->string('title');
            $table->text('body');
            $table->string('file')->nullable();
            $table->date('datePublication');
            $table->foreignId('administrateur_id')->references('id')->on('administrateurs')->onDelete('cascade');
            $table->foreignId('psychologue_id')->references('id')->on('psychologues')->onDelete('cascade');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');

    }
};
