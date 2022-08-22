<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade');;
            $table->unsignedBigInteger('therapist_id');
            $table->foreign('therapist_id')->references('user_id')->on('events')->onDelete('cascade');;
            $table->string('therapist_name')->nullable();
            $table->string('phone')->nullable();
            $table->enum('location', ['physical', 'online'])->default('physical');
            $table->date('date');
            $table->time('time_begin');
            $table->time('time_end');
            $table->enum('Status', ['pending', 'approved'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
