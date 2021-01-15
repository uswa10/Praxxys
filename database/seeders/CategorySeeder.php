<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([

          'c_name' => 'Sports and Lifestyle',
            'c_name' => 'Electronics',
              'c_name' => 'Furniture',

            ]);
    }
}
