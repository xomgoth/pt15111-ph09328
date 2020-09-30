<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Subject;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // $this ->  call([
        //     StudentsTableSeeder::class,
        //     SubjectsTableSeeder::class,
        // ]);
        Student::factory(10)->create();
        Subject::factory(20)->create();
    }
}
