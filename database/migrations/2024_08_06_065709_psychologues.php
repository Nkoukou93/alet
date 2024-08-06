<?php

use App\Enums\StatutPsy;
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
        Schema::create('psychologues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->string('file')->nullable();
            $table->boolean('terms')->default(false);
            $table->string('profile')->nullable();
            $table->string('refresh_token', 254)->nullable()->index();
            $table->string('description', 100);
            $table->string('status')->default(StatutPsy::EN_ATTENTE);
            $table->foreignId('admin_id')->references('id')->on('administrateurs')->onDelete('cascade');
            $table->foreignId('patient_id')->references('id')->on('patients')->onDelete('cascade');
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
