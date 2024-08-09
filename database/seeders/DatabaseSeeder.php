<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Year;
use App\Models\Nation;
use App\Models\Subject;
use App\Models\learningSubject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Year::truncate();
        Subject::truncate();
        User::truncate();
        Nation::truncate();
       
        Year::create([
            'year'=>'First Year',
            'slug'=>'first-year'
        ]);
        Year::create([
            'year'=>'Second Year',
            'slug'=>'second-year'
        ]);
        Year::create([
            'year'=>'Third Year',
            'slug'=>'third-year'
        ]);
        Year::create([
            'year'=>'Fourth Year',
            'slug'=>'fourth-year'
        ]);
        Year::create([
            'year'=>'Final Year',
            'slug'=>'final-year'
        ]);
        Subject::create([
            'subject'=>'none',
            'slug'=>'none'
        ]);
        Subject::create([
            'subject'=>'Computer Science',
            'slug'=>'computer-science'
        ]);
        Subject::create([
            'subject'=>'Computer Technology',
            'slug'=>'computer-technology'
        ]);
        User::create([
           'name'=>'staff',
           'password'=>'staff'
        ]);
        Nation::create([
            'type'=>'nation',
         ]);
         Nation::create([
            'type'=>'foreign',
         ]);
       
    }
}
