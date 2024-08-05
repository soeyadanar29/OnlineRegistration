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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id');
            $table->foreignId('subject_id');
            $table->foreignId('user_id')->default(1);
            $table->string('rollno')->unique();
            $table->integer('entrance_year');
            $table->string('name');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('nationality');
            $table->string('fatherNationality');
            $table->string('motherNationality');
            $table->string('religion');
            $table->string('fatherReligion');
            $table->string('motherReligion');
            $table->string('birthplace');
            $table->string('nrc')->unique();;
            $table->string('fatherNrc')->unique();;
            $table->string('motherNrc')->unique();;
            $table->date('birth_date');
            $table->string('phone');
            $table->string('fatherPhone');
            $table->string('motherPhone');
            $table->text('address');
            $table->string('password');
            $table->string('thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
    //
    // 
};
