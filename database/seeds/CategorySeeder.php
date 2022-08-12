<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
            'name'=> 'shirt',
            'image'=> '10023.jpg'
         ],
         [
            'name'=> 'pag',
            'image'=> '10209.jpg'

         ],
         [
            'name'=> 'T_shirt',
            'image'=> '10005.jpg'
         ],
         [
            'name'=> 'shoes',
            'image'=> '11516.jpg'
         ],
         [
            'name'=> 'short',
            'image'=> '10033.jpg'
         ],
         [
            'name'=> 'boots',
            'image'=> '10089.jpg'
         ],
         [
            'name'=> 'watch',
            'image'=> '10098.jpg'
         ]


        ]);
    }
}
