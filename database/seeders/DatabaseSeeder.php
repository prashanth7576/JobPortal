<?php

namespace Database\Seeders;


use App\Models\Department;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;
use App\Models\User;
use App\Models\Demo;
use App\Models\Jobstatus;
use App\Models\NewApplicant;
use App\Models\Skill;
use App\Models\Company;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      //  \App\Models\Demo::factory(10)->create();
      //\App\Models\Skill::factory(10)->create();


     //   $departments = Department::factory(10)->create();

       // $skills = Skill::factory(10)->create();


       // $companies = Company::factory(10)->create();





       // $tags = Tag::factory(10)->create();

       // User::factory(20)->create()->each(function($user) use($tags){
        //    Listing::factory(rand(1, 5))->create([
        //        'uesr_id' => $user->id
        //    ])->each (function($listing) use($tags){
           //     $listing->tags()->attach(tags->random( number: 2));
         //   });
       // });
    }
}
