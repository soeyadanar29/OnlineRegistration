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
            $table->foreignId('major_id');
            $table->foreignId('user_id')->default(1);
            $table->string('rollno')->unique();
            $table->integer('entrance_year');

            $table->string('nameMyan');
            $table->string('fatherNameMyan');
            $table->string('motherNameMyan');

            $table->string('nameEng');
            $table->string('fatherNameEng');
            $table->string('motherNameEng');

            $table->string('nationality');
            $table->string('fatherNationality');
            $table->string('motherNationality');

            $table->string('religion');
            $table->string('fatherReligion');
            $table->string('motherReligion');

            $table->string('birthplace');
            $table->string('birthplaceFather');
            $table->string('birthplaceMother');

            $table->string('state');
            $table->string('fatherState');
            $table->string('motherState');

            $table->string('nrc')->unique();
            $table->string('fatherNrc')->unique();
            $table->string('motherNrc')->unique();

            $table->foreignId('nation_id');

            $table->date('birth_date');
            $table->string('Mrollno');
            $table->string('Myear');
            $table->string('testPlace');
            $table->string('fullAdd');
            $table->string('phone');

            $table->string('fatherJob');
            $table->string('motherJob');

            $table->json('exams');

            $table->string('PName');
            $table->string('relation');
            $table->string('PJob');
            $table->string('PAddress');
            $table->string('Pphone');

            $table->string('permission');
            $table->string('thumbnail');

            $table->string('wardPermission');
            $table->string('policePermission');
            $table->string('marks');
            $table->string('familyFile');
            $table->string('certification');
            $table->string('nrcFile');
            $table->string('fatherNrcFile');
            $table->string('motherNrcFile');
            $table->string('covid_permission');

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
