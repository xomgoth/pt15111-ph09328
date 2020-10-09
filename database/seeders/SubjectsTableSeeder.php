<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      if (DB::table('subjects')->count()===0){
        DB::table('subjects')->insert([
            [
                'name' => 'Laravel',
                'time' => '2020/09/23',
                'is_active' =>'1'
            ],
            [
                'name' => 'Name',
                'time' => '2020/09/23',
                'is_active' =>'1'
            ],
        ]);
      }else{
          echo 'co du lieu';
      }
    }
}
