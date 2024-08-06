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
        Schema::create("rendez_vous", function (Blueprint $table) {
            $table->id();
            $table->string("motif");
            $table->foreignId("patient_id")->references("id")->on("patients")->onDelete("cascade");
            $table->foreignId("psychologue_id")->references("id")->on("psychologues")->onDelete("cascade");
            $table->date("date");
            $table->time("time");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
