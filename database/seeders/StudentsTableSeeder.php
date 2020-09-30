<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 // sử dụng các dữ liệu trong đó

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     if (DB::table('students')->count()===0){
        DB::table('students')->insert([
            [
                'name' => 'nguyen van a',
                'phone' => '0987654321',
                'age' => 20,
                'gender' => 1,
                'address' => 'HN',

            ],
            [
                'name' => 'nguyen van b',
                'phone' => '0987651234',
                'age' => 22,
                'gender' => 1,
                'address' => 'TB',

            ],
        ]);
     }
     else{
         echo 'Bang students da co du lieu' ;
     }
    }
}
