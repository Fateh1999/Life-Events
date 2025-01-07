<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class laravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=10; $i++){
            student::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->email()
            ]);
        }
        // $json = File::get(path:'database/json/students.json');
        // $students = collect(json_decode($json));

        // $students->each(function($students){
        //     // student::insert($students);
        //      student::create([
        //     'name' => $students->name,
        //     'email' => $students->email
        // ]);
        // });

        // student::create([
        //     'name' => 'fateh',
        //     'email' => 'fateh@gmail.com'
        // ]);
    }
}
