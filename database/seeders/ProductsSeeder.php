<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id'=>4,
            'cover'=>'src/dummy/531570050_dream-collector-01-1.jpg',
            'name'=>'dream collector',
            'slug'=>'dream-collector',
            'price'=>100000,
            'count'=>100,
            'description'=>'dream collector',
            'user_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('products')->insert([
            'category_id'=>1,
            'cover'=>'src/dummy/9786020642826_saya_pilih_sehat_C-148-1.jpg',
            'name'=>'saya pilih hidup sehat dan sembuh',
            'slug'=>'saya-pilih-hidup-sehat-dan-sembuh',
            'price'=>120000,
            'count'=>100,
            'description'=>'saya pilih hidup sehat dan sembuh',
            'user_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('products')->insert([
            'category_id'=>1,
            'cover'=>'src/dummy/9786024553920.png',
            'name'=>'bicara itu seadanya',
            'slug'=>'bicara-itu-seadanya',
            'price'=>110000,
            'count'=>100,
            'description'=>'bicara itu seadanya',
            'user_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('products')->insert([
            'category_id'=>2,
            'cover'=>'src/dummy/buku1.jpg',
            'name'=>'financial iq',
            'slug'=>'financial-iq',
            'price'=>78000,
            'count'=>100,
            'description'=>'financial iq',
            'user_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('products')->insert([
            'category_id'=>2,
            'cover'=>'src/dummy/buku2.jpg',
            'name'=>'richdad poor dad',
            'slug'=>'richdad-poor-dad',
            'price'=>78000,
            'count'=>100,
            'description'=>'richdad poor dad',
            'user_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('products')->insert([
            'category_id'=>2,
            'cover'=>'src/dummy/buku3.jpg',
            'name'=>'richdad poor dad',
            'slug'=>'richdad-poor-dad',
            'price'=>78000,
            'count'=>100,
            'description'=>'richdad poor dad',
            'user_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('products')->insert([
            'category_id'=>1,
            'cover'=>'src/dummy/buku4.jpg',
            'name'=>'cerita untuk ayah',
            'slug'=>'cerita-untuk-ayah',
            'price'=>78000,
            'count'=>100,
            'description'=>'cerita untuk ayah',
            'user_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('products')->insert([
            'category_id'=>1,
            'cover'=>'src/dummy/buku5.jpg',
            'name'=>'home sweet loan',
            'slug'=>'home-sweet-loan',
            'price'=>90000,
            'count'=>100,
            'description'=>'home sweet loan',
            'user_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('products')->insert([
            'category_id'=>4,
            'cover'=>'src/dummy/buku6.jpg',
            'name'=>'harry potter',
            'slug'=>'harry-potter',
            'price'=>90000,
            'count'=>100,
            'description'=>'harry potter',
            'user_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('products')->insert([
            'category_id'=>4,
            'cover'=>'src/dummy/buku7.jpg',
            'name'=>'jujutsukaisen',
            'slug'=>'jujutsukaisen',
            'price'=>90000,
            'count'=>100,
            'description'=>'jujutsukaisen',
            'user_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('products')->insert([
            'category_id'=>4,
            'cover'=>'src/dummy/dream-collector-02---tamat.jpg',
            'name'=>'dream collector 2',
            'slug'=>'dream-collector-2',
            'price'=>190000,
            'count'=>100,
            'description'=>'dream collector 2',
            'user_id'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
