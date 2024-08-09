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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('wardPermission');
            $table->string('policePermission');
            $table->string('marks');
            $table->string('familyFile');
            $table->string('certification');
            $table->string('nrc');
            $table->string('fatherNrc');
            $table->string('motherNrc');
            $table->string('covid_permission');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
