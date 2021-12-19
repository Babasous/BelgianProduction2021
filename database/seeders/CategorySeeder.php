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
        $categories = [
            ['nom' => 'action'],
            ['nom' => 'aventure'],
            ['nom' => 'drame'],
            ['nom' => 'romance'],
            ['nom' => 'science-fiction'],
        ];
        
        DB::table('categories')->insert($categories);
    }
}
