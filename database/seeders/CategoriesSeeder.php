<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "Arts & Music",
            'slug' => "arts-&-music",
            'description'=>"Arts & Music"
        ]);
        DB::table('categories')->insert([
            'name' => "Business",
            'slug' => "business",
            'description'=>"Business"
        ]);
        DB::table('categories')->insert([
            'name' => "Biographies",
            'slug' => "biographies",
            'description'=>"Biographies"
        ]);
        DB::table('categories')->insert([
            'name' => "Comics",
            'slug' => "comics",
            'description'=>"Comics"
        ]);
        DB::table('categories')->insert([
            'name' => "Cooking",
            'slug' => "cooking",
            'description'=>"Cooking"
        ]);
        DB::table('categories')->insert([
            'name' => "Kids",
            'slug' => "kids",
            'description'=>"Kids"
        ]);
        DB::table('categories')->insert([
            'name' => "Romance",
            'slug' => "romance",
            'description'=>"Romance"
        ]);
        DB::table('categories')->insert([
            'name' => "Religion",
            'slug' => "religion",
            'description'=>"Religion"
        ]);
    }
}
