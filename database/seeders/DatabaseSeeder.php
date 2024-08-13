<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Year;
use App\Models\Major;
use App\Models\Nation;
use App\Models\Semester;
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
        Major::truncate();
        User::truncate();
        Nation::truncate();
        Semester::truncate();
       
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
        Major::create([
            'major'=>'none',
            'slug'=>'none'
        ]);
        Major::create([
            'major'=>'Computer Science',
            'slug'=>'computer-science'
        ]);
        Major::create([
            'major'=>'Computer Technology',
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
         Semester::create([
            'semester'=>'first',
            'slug'=>'first-semester'
         ]);
         Semester::create([
            'semester'=>'second',
            'slug'=>'second-semester'
         ]);
       
    }
}
