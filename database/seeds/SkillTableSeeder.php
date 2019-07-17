<?php

use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {

    $data=File::get(storage_path('skills_list.txt'));
    $data = explode("\n", $data);
    $dataTab=null;
    $i=1;
    foreach($data as $line) {
      
        DB::table('skill')->insert([
            'name' =>$line,

        ]);
    }

  }
}
