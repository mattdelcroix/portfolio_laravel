<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('category')->insert(['name' => 'Sea']);
      DB::table('category')->insert(['name' => 'Mountain']);
      DB::table('category')->insert(['name' => 'Ireland']);
      DB::table('category')->insert(['name' => 'Lake']);
      DB::table('category')->insert(['name' => 'Nature']);
      DB::table('category')->insert(['name' => 'Divers']);
    }
}
