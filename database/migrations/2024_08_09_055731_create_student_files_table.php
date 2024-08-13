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
        Schema::create('student_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('studentId');
            $table->string('wardPermission');
            $table->string('policePermission');
            $table->string('marks');
            $table->string('familyFile');
            $table->string('certificate');
            $table->string('nrcFile');
            $table->string('fatherNrcFile');
            $table->string('motherNrcFile');
            $table->string('covid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_files');
    }
};
