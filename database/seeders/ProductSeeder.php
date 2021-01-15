<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([

          'name' => 'Lebron X',
          'description' => 'Basketball shoes',
          'category' => 'Sports and Lifestyle',
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           'name' => 'ASUS ROG PHONE 3',
           'description' => 'Gaming phone',
           'category' => 'Electronics',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Folding Bed',
            'description' => 'Elastic bed',
            'category' => 'Furiniture',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),


      ]);
    }
    }
