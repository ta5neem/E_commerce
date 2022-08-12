
<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//men shirt
         DB::table('products')->insert([
            'name' => 'shirt1',
            'sell_price' => '5000',
            'description' => "Men's long arm shirt",
            'color' => 'white',
            'size' => 'XL',
            'image' => '10190.jpg',
            'brand_id' => '1',
            'category_id' => '1',
            'total_q'=>'20',
            'vote_count'=>'12',
            'vote_average'=>'12',
            'popularity'=>'10',
            ]);

          DB::table('products')->insert([
            'name' => 'shirt2',
            'sell_price' => '5500',
            'description' => "Men's long arm shirt",
            'color' => 'blue',
            'size' => 'L',
            'image' => '10189.jpg',
            'brand_id' => '1',
            'category_id' => '1',
            'total_q'=>'20',
            'vote_count'=>'20',
            'vote_average'=>'20',
            'popularity'=>'10',

            ]);
              DB::table('products')->insert([
            'name' => 'shirt3',
            'sell_price' => '5500',
            'description' => "Men's long arm shirt",
            'color' => 'blue',
            'size' => 'L',
            'image' => '10187.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'30',
'vote_average'=>'30',
'popularity'=>'10',

]);
           DB::table('products')->insert([
            'name' => 'shirt4',
            'sell_price' => '6000',
            'description' => "Men's long arm shirt",
            'color' => 'gray',
            'size' => 'XL',
            'image' => '10407.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'60',
'vote_count'=>'60',
'vote_average'=>'60',
'popularity'=>'10',

]);
            DB::table('products')->insert([
            'name' => 'shirt5',
            'sell_price' => '6700',
            'description' => "Men's long arm shirt",
            'color' => 'gray',
            'size' => 'XL',
            'image' => '10184.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'14',
'vote_average'=>'14',
'popularity'=>'10',

]);
            DB::table('products')->insert([
            'name' => 'shirt6',
            'sell_price' => '8500',
            'description' => "Men's long arm shirt",
            'color' => 'white',
            'size' => 'M',
            'image' => '10352.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'12',
'vote_average'=>'12',
'popularity'=>'10',

]);
             DB::table('products')->insert([
            'name' => 'shirt7',
            'sell_price' => '5500',
            'description' => "Men's long arm shirt",
            'color' => 'black',
            'size' => 'L',
            'image' => '10380.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'96',
'vote_average'=>'96',
'popularity'=>'10',

]);
              DB::table('products')->insert([
            'name' => 'shirt8',
            'sell_price' => '5500',
            'description' => "Men's long arm shirt",
            'color' => 'blue',
            'size' => 'L',
            'image' => '10432.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'78',
'vote_average'=>'78',
'popularity'=>'10',

]);
               DB::table('products')->insert([
            'name' => 'shirt9',
            'sell_price' => '5500',
            'description' => "Men's long arm shirt",
            'color' => 'gray',
            'size' => 'L',
            'image' => '10473.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'45',
'vote_average'=>'45',
'popularity'=>'10',

]);

                DB::table('products')->insert([
            'name' => 'shirt10',
            'sell_price' => '8800',
            'description' => "Men's long arm shirt",
            'color' => 'blue',
            'size' => 'L',
            'image' => '10356.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'12',
'vote_average'=>'12',
'popularity'=>'10',
]);
                 DB::table('products')->insert([
            'name' => 'shirt11',
            'sell_price' => '5500',
            'description' => "Men's short arm shirt",
            'color' => 'green',
            'size' => 'L',
            'image' => '10437.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'56',
'vote_average'=>'56',
'popularity'=>'10',
]);
         DB::table('products')->insert([
            'name' => 'shirt12',
            'sell_price' => '7700',
            'description' => "Men's short arm shirt",
            'color' => 'black',
            'size' => 'XL',
            'image' => '10256.jpeg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'74',
'vote_average'=>'74',
'popularity'=>'10',
]);
          DB::table('products')->insert([
            'name' => 'shirt13',
            'sell_price' => '2500',
            'description' => "Men's short arm shirt",
            'color' => 'red',
            'size' => 'L',
            'image' => '10796.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'85',
'vote_average'=>'85',
'popularity'=>'10',
]);
           DB::table('products')->insert([
            'name' => 'shirt14',
            'sell_price' => '5500',
            'description' => "Men's short arm shirt",
            'color' => 'red',
            'size' => 'L',
            'image' => '10793.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'32',
'vote_average'=>'32',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'shirt15',
            'sell_price' => '6500',
            'description' => "Men's short arm shirt",
            'color' => 'red',
            'size' => 'L',
            'image' => '10792.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'56',
'vote_average'=>'56',
'popularity'=>'10',
]);
             DB::table('products')->insert([
            'name' => 'shirt16',
            'sell_price' => '5500',
            'description' => "Men's short arm shirt",
            'color' => 'black',
            'size' => 'L',
            'image' => '10809.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'52',
'vote_average'=>'52',
'popularity'=>'10',
]);
              DB::table('products')->insert([
            'name' => 'shirt17',
            'sell_price' => '2200',
            'description' => "Men's short arm shirt",
            'color' => 'white',
            'size' => 'L',
            'image' => '10479.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'20',
'vote_average'=>'20',
'popularity'=>'10',
]);
               DB::table('products')->insert([
            'name' => 'shirt18',
            'sell_price' => '4000',
            'description' => "Men's short arm shirt",
            'color' => 'brouwn',
            'size' => 'ْXL',
            'image' => '10423.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'65',
'vote_average'=>'65',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'shirt19',
            'sell_price' => '7000',
            'description' => "Men's short arm shirt",
            'color' => 'black',
            'size' => 'L',
            'image' => '10474.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'87',
'vote_average'=>'87',
'popularity'=>'10',
]);

DB::table('products')->insert([
            'name' => 'shirt20',
            'sell_price' => '5000',
            'description' => "Men's short arm shirt",
            'color' => 'red',
            'size' => 'L',
            'image' => '10789.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'32',
'vote_average'=>'32',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'shirt21',
            'sell_price' => '8000',
            'description' => "Men's short arm shirt",
            'color' => 'blue',
            'size' => 'L',
            'image' => '10790.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'96',
'vote_average'=>'96',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'shirt22',
            'sell_price' => '9500',
            'description' => "Men's short arm shirt",
            'color' => 'blue',
            'size' => 'L',
            'image' => '10369.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'12',
'vote_average'=>'12',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'shirt23',
            'sell_price' => '8000',
            'description' => "Men's short arm shirt",
            'color' => 'green',
            'size' => 'XL',
            'image' => '10255.jpeg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'13',
'vote_average'=>'13',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'shirt24',
            'sell_price' => '9000',
            'description' => "Men's short arm shirt",
            'color' => 'blue',
            'size' => 'S',
            'image' => '10430.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'48',
'vote_average'=>'48',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'shirt25',
            'sell_price' => '8000',
            'description' => "Men's short arm shirt",
            'color' => 'green',
            'size' => 'L',
            'image' => '10434.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'59',
'vote_average'=>'59',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'shirt26',
            'sell_price' => '8000',
            'description' => "Men's short arm shirt",
            'color' => 'black',
            'size' => 'L',
            'image' => '10481.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'15',
'vote_average'=>'15',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'shirt27',
            'sell_price' => '8000',
            'description' => "Men's short arm shirt",
            'color' => 'white',
            'size' => 'L',
            'image' => '10484.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'36',
'vote_average'=>'36',
'popularity'=>'10',
]);
    //bag
          DB::table('products')->insert([
            'name' => 'bag1',
            'sell_price' => '8000',
            'description' => "Women bag",
            'color' => 'green',
            'size' => 'L',
            'image' => '10196.jpg',
            'brand_id' => '1',
            'category_id' => '2',
'total_q'=>'20',
'vote_count'=>'65',
'vote_average'=>'65',
'popularity'=>'10',
]);
        DB::table('products')->insert([
            'name' => 'bag2',
            'sell_price' => '9500',
            'description' => "Women bag",
            'color' => 'brouwn',
            'size' => 'L',
            'image' => '10197.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'49',
'vote_average'=>'49',
'popularity'=>'10',
]);

        DB::table('products')->insert([
            'name' => 'bag3',
            'sell_price' => '10000',
            'description' => "Women bag",
            'color' => 'white',
            'size' => 'L',
            'image' => '10198.jpg',
            'brand_id' => '1',
            'category_id' => '2',
'total_q'=>'20',
'vote_count'=>'16',
'vote_average'=>'16',
'popularity'=>'10',
]);
        DB::table('products')->insert([
            'name' => 'bag4',
            'sell_price' => '8000',
            'description' => "Women bag",
            'color' => 'black',
            'size' => 'L',
            'image' => '10199.jpg',
            'brand_id' => '1',
            'category_id' => '2',
'total_q'=>'20',
'vote_count'=>'84',
'vote_average'=>'84',
'popularity'=>'10',
]);
         DB::table('products')->insert([
            'name' => 'bag5',
            'sell_price' => '12000',
            'description' => "Women bag",
            'color' => 'black',
            'size' => 'L',
            'image' => '10208.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'23',
'vote_average'=>'23',
'popularity'=>'10',
]);
          DB::table('products')->insert([
            'name' => 'bag6',
            'sell_price' => '8000',
            'description' => "Women bag",
            'color' => 'blue',
            'size' => 'L',
            'image' => '10209.jpg',
            'brand_id' => '1',
            'category_id' => '2',
'total_q'=>'20',
'vote_count'=>'25',
'vote_average'=>'25',
'popularity'=>'10',
]);
           DB::table('products')->insert([
            'name' => 'bag7',
            'sell_price' => '7000',
            'description' => "Women bag",
            'color' => 'brouwn',
            'size' => 'L',
            'image' => '10211.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'65',
'vote_average'=>'65',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'bag8',
            'sell_price' => '5000',
            'description' => "Women bag",
            'color' => 'purple',
            'size' => 'L',
            'image' => '10215.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'97',
'vote_average'=>'97',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'bag9',
            'sell_price' => '5000',
            'description' => "Women bag",
            'color' => 'purple',
            'size' => 'L',
            'image' => '10227.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'50',
'vote_average'=>'50',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'bag10',
            'sell_price' => '8000',
            'description' => "Women bag",
            'color' => 'green',
            'size' => 'L',
            'image' => '10228.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'94',
'vote_average'=>'94',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'bag11',
            'sell_price' => '5000',
            'description' => "Women bag",
            'color' => 'green',
            'size' => 'L',
            'image' => '10223.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'61',
'vote_average'=>'61',
'popularity'=>'10',
]);
            DB::table('products')->insert([
            'name' => 'bag12',
            'sell_price' => '7000',
            'description' => "Women bag",
            'color' => 'red',
            'size' => 'L',
            'image' => '10732.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'83',
'vote_average'=>'83',
'popularity'=>'10',
]);
        DB::table('products')->insert([
            'name' => 'bag13',
            'sell_price' => '3000',
'description' => "Women bag",
            'color' => 'red',
            'size' => 'L',
            'image' => '10736.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'40',
'vote_average'=>'40',
'popularity'=>'10',
]);
        DB::table('products')->insert([
            'name' => 'bag14',
            'sell_price' => '4000',
            'description' => "Women bag",
            'color' => 'black',
            'size' => 'L',
            'image' => '10729.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'60',
'vote_average'=>'60',
'popularity'=>'10',
]);
         DB::table('products')->insert([
            'name' => 'bag15',
            'sell_price' => '8000',
            'description' => "Women bag",
            'color' => 'black',
            'size' => 'L',
            'image' => '10735.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'80',
'vote_average'=>'80',
'popularity'=>'10',
]);
          DB::table('products')->insert([
            'name' => 'bag16',
            'sell_price' => '5000',
            'description' => "Women bag",
            'color' => 'green',
            'size' => 'L',
            'image' => '10734.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'11',
'vote_average'=>'11',
'popularity'=>'10',
]);

 DB::table('products')->insert([
            'name' => 'bag17',
            'sell_price' => '7000',
            'description' => "Women bag",
            'color' => 'purple',
            'size' => 'L',
            'image' => '10733.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'55',
'vote_average'=>'55',
'popularity'=>'10',
]);

 DB::table('products')->insert([
            'name' => 'bag18',
            'sell_price' => '8000',
            'description' => "Women bag",
            'color' => 'gray',
            'size' => 'L',
            'image' => '10730.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'88',
'vote_average'=>'88',
'popularity'=>'10',
]);

 DB::table('products')->insert([
            'name' => 'bag19',
            'sell_price' => '4000',
            'description' => "Women bag",
            'color' => 'purple',
            'size' => 'L',
            'image' => '10726.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'66',
'vote_average'=>'66',
'popularity'=>'10',
]);

DB::table('products')->insert([
            'name' => 'bag20',
            'sell_price' => '7000',
            'description' => "Women bag",
            'color' => 'brouwn',
            'size' => 'L',
            'image' => '10222.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'22',
'vote_average'=>'22',
'popularity'=>'10',
]);
 DB::table('products')->insert([
            'name' => 'bag21',
            'sell_price' => '11000',
            'description' => "Women bag",
            'color' => 'brouwn',
            'size' => 'L',
            'image' => '10220.jpg',
            'brand_id' => '1',
            'category_id' => '2',

'total_q'=>'20',
'vote_count'=>'77',
'vote_average'=>'77',
'popularity'=>'10',
]);
//women shirt
 DB::table('products')->insert([
            'name' => 'shirt28',
            'sell_price' => '11000',
            'description' => "Women shirt",
            'color' => 'purple',
            'size' => 'XL',
            'image' => '11016.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'85',
'vote_average'=>'85',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'shirt29',
            'sell_price' => '12000',
            'description' => "Women shirt",
            'color' => 'red',
            'size' => 'L',
            'image' => '11034.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'35',
'vote_average'=>'35',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'shirt30',
            'sell_price' => '9000',
            'description' => "Women shirt",
            'color' => 'red',
            'size' => 'S',
            'image' => '11039.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'60',
'vote_average'=>'12',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'shirt31',
            'sell_price' => '11000',
            'description' => "Women shirt",
            'color' => 'yallow',
            'size' => 'XL',
            'image' => '11615.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'67',
'vote_average'=>'67',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'shirt32',
            'sell_price' => '6000',
            'description' => "Women shirt",
            'color' => 'yallow',
            'size' => 'XL',
            'image' => '11756.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'81',
'vote_average'=>'81',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'shirt33',
            'sell_price' => '8000',
            'description' => "Women shirt",
            'color' => 'purple',
            'size' => 'XL',
            'image' => '11010.jpg',
            'brand_id' => '1',
            'category_id' => '1',
'total_q'=>'20',
'vote_count'=>'91',
'vote_average'=>'91',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'shirt34',
            'sell_price' => '11000',
            'description' => "Women shirt",
            'color' => 'blue',
            'size' => 'XL',
            'image' => '11011.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'60',
'vote_average'=>'12',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'shirt35',
            'sell_price' => '21000',
            'description' => "Women shirt",
            'color' => 'blue',
            'size' => 'S',
            'image' => '11017.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'62',
'vote_average'=>'62',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'shirt36',
            'sell_price' => '3000',
            'description' => "Women shirt",
            'color' => 'blue',
            'size' => 'XL',
            'image' => '11031.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'71',
'vote_average'=>'71',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'shirt37',
            'sell_price' => '9000',
            'description' => "Women shirt",
            'color' => 'blue',
            'size' => 'XL',
            'image' => '11035.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'90',
'vote_average'=>'90',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'shirt38',
            'sell_price' => '7000',
            'description' => "Women shirt",
            'color' => 'blue',
            'size' => 'L',
            'image' => '11714.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'70',
'vote_average'=>'70',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'shirt39',
            'sell_price' => '3000',
            'description' => "Women shirt",
            'color' => 'blue',
            'size' => 'XL',
            'image' => '11713.jpg',
            'brand_id' => '1',
            'category_id' => '1',


'total_q'=>'20',
'vote_count'=>'50',
'vote_average'=>'50',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'shirt40',
            'sell_price' => '8000',
            'description' => "Women shirt",
            'color' => 'red',
            'size' => 'XL',
            'image' => '11724.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'64',
'vote_average'=>'64',
'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shirt41',
            'sell_price' => '5000',
            'description' => "Women shirt",
            'color' => 'red',
            'size' => 'XL',
            'image' => '11012.jpg',
            'brand_id' => '1',
            'category_id' => '1',

'total_q'=>'20',
'vote_count'=>'21',
'vote_average'=>'21',
'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shirt42',
            'sell_price' => '9000',
            'description' => "Women shirt",
            'color' => 'brouwn',
            'size' => 'L',
            'image' => '11038.jpg',
            'brand_id' => '1',
            'category_id' => '1',


'total_q'=>'20',
'vote_count'=>'33',
'vote_average'=>'33',
'popularity'=>'10',
]);
DB::table('products')->insert([
            'name' => 'Tshirt1',
            'sell_price' => '12000',
            'description' => "Women shirt",
            'color' => 'blue',
            'size' => 'L',
            'image' => '11757.jpg',
            'brand_id' => '1',
            'category_id' => '3',

'total_q'=>'20',
'vote_count'=>'84',
'vote_average'=>'84',
'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt2',
            'sell_price' => '9000',
            'description' => "Women shirt",
            'color' => 'white',
            'size' => 'XL',
            'image' => '11758.jpg',
            'brand_id' => '1',
            'category_id' => '3',

'total_q'=>'20',
'vote_count'=>'84',
'vote_average'=>'84',
'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt3',
            'sell_price' => '8000',
            'description' => "Women shirt",
            'color' => 'white',
            'size' => 'XL',
            'image' => '11788.jpg',
            'brand_id' => '1',
            'category_id' => '3',

'total_q'=>'20',
'vote_count'=>'48',
'vote_average'=>'48',
'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt4',
            'sell_price' => '10000',
            'description' => "Women shirt",
            'color' => 'white',
            'size' => 'XL',
            'image' => '11786.jpg',
            'brand_id' => '1',
            'category_id' => '3',

'total_q'=>'20',
'vote_count'=>'62',
'vote_average'=>'62',
'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt5',
            'sell_price' => '2000',
            'description' => "Women shirt",
            'color' => 'green',
            'size' => 'XL',
            'image' => '11790.jpg',
            'brand_id' => '1',
            'category_id' => '3',

'total_q'=>'20',
'vote_count'=>'32',
'vote_average'=>'32',
'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt6',
            'sell_price' => '9000',
            'description' => "Women shirt",
            'color' => 'red',
            'size' => 'L',
            'image' => '11789.jpg',
            'brand_id' => '1',
            'category_id' => '3',

'total_q'=>'20',
'vote_count'=>'99',
'vote_average'=>'99',
'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt7',
            'sell_price' => '9000',
            'description' => "Women shirt",
            'color' => 'gray',
            'size' => 'XL',
            'image' => '11622.jpg',
            'brand_id' => '1',
            'category_id' => '3',

'total_q'=>'20',
'vote_count'=>'22',
'vote_average'=>'22',
'popularity'=>'10',

]);
// women shoes
DB::table('products')->insert([
            'name' => 'shoes1',
            'sell_price' => '8000',
            'description' => "Women shoes",
            'color' => 'brouwn',
            'size' => '36',
            'image' => '11492.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'11',
            'vote_average'=>'11',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes2',
            'sell_price' => '9000',
            'description' => "Women shoes",
            'color' => 'brouwn',
            'size' => '40',
            'image' => '11496.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'11',
            'vote_average'=>'11',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes3',
            'sell_price' => '9000',
            'description' => "Women shoes",
            'color' => 'yallow',
            'size' => '37',
            'image' => '11496.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'10',
            'vote_average'=>'10',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes4',
            'sell_price' => '3000',
            'description' => "Women shoes",
            'color' => 'black',
            'size' => '39',
            'image' => '11499.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'44',
            'vote_average'=>'44',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes5',
            'sell_price' => '4000',
            'description' => "Women shoes",
            'color' => 'black',
            'size' => '38',
            'image' => '11500.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'22',
            'vote_average'=>'22',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes6',
            'sell_price' => '10000',
            'description' => "Women shoes",
            'color' => 'black',
            'size' => '38',
            'image' => '11515.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'99',
            'vote_average'=>'99',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes7',
            'sell_price' => '9000',
            'description' => "Women shoes",
            'color' => 'black',
            'size' => '37',
            'image' => '11516.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'88',
            'vote_average'=>'88',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes8',
            'sell_price' => '9000',
            'description' => "Women shoes",
            'color' => 'black',
            'size' => '36',
            'image' => '11518.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'11',
            'vote_average'=>'11',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes9',
            'sell_price' => '5000',
            'description' => "Women shoes",
            'color' => 'black',
            'size' => '39',
            'image' => '11504.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'45',
            'vote_average'=>'45',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes10',
            'sell_price' => '7000',
            'description' => "Women shoes",
            'color' => 'black',
            'size' => '38',
            'image' => '11508.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'22',
            'vote_average'=>'22',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes11',
            'sell_price' => '1000',
            'description' => "Women shoes",
            'color' => 'brouwn',
            'size' => '37',
            'image' => '11509.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'33',
            'vote_average'=>'33',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes12',
            'sell_price' => '5000',
            'description' => "Women shoes",
            'color' => 'yallow',
            'size' => '39',
            'image' => '11510.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'11',
            'vote_average'=>'11',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes13',
            'sell_price' => '9000',
            'description' => "Women shoes",
            'color' => 'yallow',
            'size' => '37',
            'image' => '11512.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'77',
            'vote_average'=>'77',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes14',
            'sell_price' => '6000',
            'description' => "Women shoes",
            'color' => 'black',
            'size' => '38',
            'image' => '11513.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'22',
            'vote_average'=>'22',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes15',
            'sell_price' => '9000',
            'description' => "Women shoes",
            'color' => 'white',
            'size' => '36',
            'image' => '11502.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'88',
            'vote_average'=>'88',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes16',
            'sell_price' => '3000',
            'description' => "Women shoes",
            'color' => 'brouwn',
            'size' => '38',
            'image' => '11507.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'77',
            'vote_average'=>'77',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'shoes17',
            'sell_price' => '9000',
            'description' => "Women shoes",
            'color' => 'brouwn',
            'size' => '39',
            'image' => '11519.jpg',
            'brand_id' => '1',
            'category_id' => '4',
            'total_q'=>'20',
            'vote_count'=>'22',
            'vote_average'=>'22',
            'popularity'=>'10',

]);
            DB::table('products')->insert([
            'name'=> 'SPORT T_SHIRT1',
            'description'=>'sleeves t_shirt / women',
            'sell_price'=>'10000',
            'total_q'=>'23',
            'color'=>'white',
            'size'=>'L',
            'image'=>'10003.jpg',
            'brand_id'=>'1',
            'category_id'=>'3',
         // 'user_id'=>'1',
            'vote_count'=>'60'
            ,'vote_average'=>'50',
            'popularity'=>'10'
         ],
         [
            'name'=> 'SPORT T_SHIRT2',
            'description'=>'t_shirt / men',
            'sell_price'=>'25000',
            'total_q'=>'25',
            'color'=>'black',
            'size'=>'L',
            'image'=>'10005.jpg',
            'brand_id'=>'1',
            'category_id'=>'3',
          //  'user_id'=>'1',
            'vote_count'=>'25'
            ,'vote_average'=>'25',
            'popularity'=>'60'
         ],
         [
            'name'=> 'SPORT T_SHIRT3',
            'description'=>'t_shirt / men',
            'sell_price'=>'23000',
            'total_q'=>'25',
            'color'=>'black',
            'size'=>'M',
            'image'=>'10006.jpg',
            'brand_id'=>'1',
            'category_id'=>'3',
          //  'user_id'=>'1',
            'vote_count'=>'85'
            ,'vote_average'=>'10',
            'popularity'=>'20'
         ],
         [
            'name'=> 'daily T_shirt1',
            'description'=>'daily T_shirt /women',
            'sell_price'=>'45000',
            'total_q'=>'15',
            'color'=>'white',
            'size'=>'L',
            'image'=>'10007.jpg',
            'brand_id'=>'2',
            'category_id'=>'3',
           // 'user_id'=>'1',
            'vote_count'=>'52'
            ,'vote_average'=>'10',
            'popularity'=>'25'
         ],
         [
            'name'=> 'back T_shirt1',
            'description'=>'black T_shirt /men',
            'sell_price'=>'25000',
            'total_q'=>'15',
            'color'=>'black',
            'size'=>'L',
            'image'=>'10008.jpg',
            'brand_id'=>'1',
            'category_id'=>'3',
           // 'user_id'=>'1',
            'vote_count'=>'60'
            ,'vote_average'=>'50',
            'popularity'=>'19'
         ],
         [
            'name'=> 'Red T_shirt1',
            'description'=>'Red T_Shirt /men',
            'sell_price'=>'32000',
            'total_q'=>'20',
            'color'=>'red',
            'size'=>'L',
            'image'=>'10009.jpg',
            'brand_id'=>'1',
            'category_id'=>'3',
         // 'user_id'=>'1',
            'vote_count'=>'60'
            ,'vote_average'=>'12',
            'popularity'=>'10'
         ],
         [
            'name'=> 'sport T_shirt4',
            'description'=>'sport T_shirt /men ',
            'sell_price'=>'28000',
            'total_q'=>'20',
            'color'=>'black',
            'size'=>'L',
            'image'=>'10010.jpg',
            'brand_id'=>'1',
            'category_id'=>'3',
         // 'user_id'=>'1',
            'vote_count'=>'11'
            ,'vote_average'=>'80',
            'popularity'=>'42'
         ],
         [
            'name'=> 'shirt43',
            'description'=>'grey /men',
            'sell_price'=>'20000',
            'total_q'=>'20',
            'color'=>'grey',
            'size'=>'L',
            'image'=>'10011.jpg',
            'brand_id'=>'1',
            'category_id'=>'1',
         // 'user_id'=>'1',
            'vote_count'=>'22'
            ,'vote_average'=>'22',
            'popularity'=>'33'
         ],
         [
            'name'=> 'black shirt1',
            'description'=>'black shirt/men',
            'sell_price'=>'11000',
            'total_q'=>'10',
            'color'=>'black',
            'size'=>'L',
            'image'=>'10012.jpg',
            'brand_id'=>'1',
            'category_id'=>'5',
         // 'user_id'=>'1',
            'vote_count'=>'20'
            ,'vote_average'=>'32',
            'popularity'=>'32'
         ]);
//sport tshirt

DB::table('products')->insert([
            'name' => 'Tshirt8',
            'sell_price' => '6000',
            'description' => "men tshirt",
            'color' => 'black',
            'size' => 'XL',
            'image' => '10030.jpg',
            'brand_id' => '1',
            'category_id' => '3',
            'total_q'=>'20',
            'vote_count'=>'11',
            'vote_average'=>'11',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt9',
            'sell_price' => '9000',
            'description' => "men tshirt",
            'color' => 'black',
            'size' => 'XL',
            'image' => '10022.jpg',
            'brand_id' => '1',
            'category_id' => '3',
            'total_q'=>'20',
            'vote_count'=>'11',
            'vote_average'=>'11',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt10',
            'sell_price' => '6000',
            'description' => "men tshirt",
            'color' => 'white',
            'size' => 'L',
            'image' => '10028.jpg',
            'brand_id' => '1',
            'category_id' => '3',
            'total_q'=>'20',
            'vote_count'=>'10',
            'vote_average'=>'10',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt11',
            'sell_price' => '6000',
            'description' => "men tshirt",
            'color' => 'yallow',
            'size' => 'L',
            'image' => '10013.jpg',
            'brand_id' => '1',
            'category_id' => '3',
            'total_q'=>'20',
            'vote_count'=>'6',
            'vote_average'=>'6',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt12',
            'sell_price' => '6000',
            'description' => "men tshirt",
            'color' => 'yallow',
            'size' => 'XL',
            'image' => '10065.jpg',
            'brand_id' => '1',
            'category_id' => '3',
            'total_q'=>'20',
            'vote_count'=>'1',
            'vote_average'=>'1',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt13',
            'sell_price' => '5000',
            'description' => "men tshirt",
            'color' => 'pink',
            'size' => 'XL',
            'image' => '10042.jpg',
            'brand_id' => '1',
            'category_id' => '3',
            'total_q'=>'20',
            'vote_count'=>'50',
            'vote_average'=>'50',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt14',
            'sell_price' => '20000',
            'description' => "men tshirt",
            'color' => 'pink',
            'size' => 'XL',
            'image' => '10025.jpg',
            'brand_id' => '1',
            'category_id' => '3',
            'total_q'=>'20',
            'vote_count'=>'88',
            'vote_average'=>'88',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt15',
            'sell_price' => '6000',
            'description' => "men tshirt",
            'color' => 'gray',
            'size' => 'XL',
            'image' => '10062.jpg',
            'brand_id' => '1',
            'category_id' => '3',
            'total_q'=>'20',
            'vote_count'=>'55',
            'vote_average'=>'55',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'Tshirt16',
            'sell_price' => '6000',
            'description' => "men tshirt",
            'color' => 'orange',
            'size' => 'L',
            'image' => '10075.jpg',
            'brand_id' => '1',
            'category_id' => '3',
            'total_q'=>'20',
            'vote_count'=>'20',
            'vote_average'=>'20',
            'popularity'=>'10',

]);
//men boot
DB::table('products')->insert([
            'name' => 'sport boot1',
            'sell_price' => '5000',
            'description' => "men boot",
            'color' => 'white',
            'size' => '41',
            'image' => '10039.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'11',
            'vote_average'=>'11',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot2',
            'sell_price' => '6000',
            'description' => "men boot",
            'color' => 'gray',
            'size' => '40',
            'image' => '10037.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'20',
            'vote_average'=>'20',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot3',
            'sell_price' => '6000',
            'description' => "men boot",
            'color' => 'gray',
            'size' => '40',
            'image' => '10089.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'66',
            'vote_average'=>'66',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot4',
            'sell_price' => '6000',
            'description' => "men boot",
            'color' => 'black',
            'size' => '40',
            'image' => '10080.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'88',
            'vote_average'=>'88',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot5',
            'sell_price' => '10000',
            'description' => "men boot",
            'color' => 'blue',
            'size' => '43',
            'image' => '10096.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'66',
            'vote_average'=>'66',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot6',
            'sell_price' => '11000',
            'description' => "men boot",
            'color' => 'black',
            'size' => '40',
            'image' => '10101.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'33',
            'vote_average'=>'33',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot7',
            'sell_price' => '6000',
            'description' => "men boot",
            'color' => 'black',
            'size' => '44',
            'image' => '10128.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'44',
            'vote_average'=>'44',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot8',
            'sell_price' => '11000',
            'description' => "men boot",
            'color' => 'white',
            'size' => '40',
            'image' => '10097.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'77',
            'vote_average'=>'77',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot9',
            'sell_price' => '16000',
            'description' => "men boot",
            'color' => 'gray',
            'size' => '40',
            'image' => '10088.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'66',
            'vote_average'=>'66',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot10',
            'sell_price' => '11000',
            'description' => "men boot",
            'color' => 'black',
            'size' => '41',
            'image' => '10168.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'20',
            'vote_average'=>'20',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot11',
            'sell_price' => '18000',
            'description' => "men boot",
            'color' => 'black',
            'size' => '43',
            'image' => '10169.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'44',
            'vote_average'=>'44',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot12',
            'sell_price' => '11000',
            'description' => "men boot",
            'color' => 'black',
            'size' => '41',
            'image' => '110170.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'20',
            'vote_average'=>'20',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot13',
            'sell_price' => '11000',
            'description' => "men boot",
            'color' => 'brouwn',
            'size' => '41',
            'image' => '10127.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'54',
            'vote_average'=>'54',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot14',
            'sell_price' => '11000',
            'description' => "men boot",
            'color' => 'brouwn',
            'size' => '41',
            'image' => '10129.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'77',
            'vote_average'=>'77',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot15',
            'sell_price' => '11000',
            'description' => "men boot",
            'color' => 'white',
            'size' => '39',
            'image' => '10172.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'55',
            'vote_average'=>'55',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot16',
            'sell_price' => '11000',
            'description' => "men boot",
            'color' => 'brouwn',
            'size' => '45',
            'image' => '10142.jpg',
            'brand_id' => '1',
            'category_id' => '6',
            'total_q'=>'20',
            'vote_count'=>'54',
            'vote_average'=>'54',
            'popularity'=>'10',

]);
//shorts
DB::table('products')->insert([
            'name' => 'sport boot17',
            'sell_price' => '1000',
            'description' => "men shorts",
            'color' => 'black',
            'size' => 'XL',
            'image' => '10018.jpg',
            'brand_id' => '1',
            'category_id' => '5',
            'total_q'=>'20',
            'vote_count'=>'54',
            'vote_average'=>'54',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot18',
            'sell_price' => '11000',
            'description' => "men shorts",
            'color' => 'black',
            'size' => 'L',
            'image' => '10033.jpg',
            'brand_id' => '1',
            'category_id' => '5',
            'total_q'=>'20',
            'vote_count'=>'61',
            'vote_average'=>'61',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'sport boot19',
            'sell_price' => '21000',
            'description' => "men shorts",
            'color' => 'gray',
            'size' => 'L',
            'image' => '10023.jpg',
            'brand_id' => '1',
            'category_id' => '5',
            'total_q'=>'20',
            'vote_count'=>'67',
            'vote_average'=>'67',
            'popularity'=>'10',

]);
//watch
DB::table('products')->insert([
            'name' => 'hand watch1',
            'sell_price' => '21000',
            'description' => "hand watch",
            'color' => 'black',
            'size' => 'small',
            'image' => '10098.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'60',
            'vote_average'=>'60',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch2',
            'sell_price' => '21000',
            'description' => "hand watch",
            'color' => 'black',
            'size' => 'small',
            'image' => '10099 (1).jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'44',
            'vote_average'=>'44',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch3',
            'sell_price' => '21000',
            'description' => "hand watch",
            'color' => 'black',
            'size' => 'small',
            'image' => '10107.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'77',
            'vote_average'=>'77',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch4',
            'sell_price' => '22000',
            'description' => "hand watch",
            'color' => 'black',
            'size' => 'small',
            'image' => '10130.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'55',
            'vote_average'=>'55',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch5',
            'sell_price' => '27000',
            'description' => "hand watch",
            'color' => 'black',
            'size' => 'small',
            'image' => '10133.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'22',
            'vote_average'=>'22',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch6',
            'sell_price' => '27000',
            'description' => "hand watch",
            'color' => 'black',
            'size' => 'small',
            'image' => '10134.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'50',
            'vote_average'=>'50',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch7',
            'sell_price' => '25000',
            'description' => "hand watch",
            'color' => 'black',
            'size' => 'small',
            'image' => '10181.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'74',
            'vote_average'=>'74',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch8',
            'sell_price' => '32000',
            'description' => "hand watch",
            'color' => 'black',
            'size' => 'small',
            'image' => '10192.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'60',
            'vote_average'=>'60',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch9',
            'sell_price' => '35000',
            'description' => "hand watch",
            'color' => 'black',
            'size' => 'small',
            'image' => '10239.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'50',
            'vote_average'=>'50',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch10',
            'sell_price' => '32000',
            'description' => "hand watch",
            'color' => 'black',
            'size' => 'small',
            'image' => '10238.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'22',
            'vote_average'=>'26',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch11',
            'sell_price' => '32000',
            'description' => "hand watch",
            'color' => 'green',
            'size' => 'small',
            'image' => '10164.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'60',
            'vote_average'=>'60',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch12',
            'sell_price' => '32000',
            'description' => "hand watch",
            'color' => 'gray',
            'size' => 'small',
            'image' => '10105.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'88',
            'vote_average'=>'88',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch13',
            'sell_price' => '32000',
            'description' => "hand watch",
            'color' => 'gray',
            'size' => 'small',
            'image' => '10106.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'10',
            'vote_average'=>'10',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch14',
            'sell_price' => '32000',
            'description' => "hand watch",
            'color' => 'black',
            'size' => 'small',
            'image' => '10108.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'52',
            'vote_average'=>'52',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch15',
            'sell_price' => '32000',
            'description' => "hand watch",
            'color' => 'gray',
            'size' => 'small',
            'image' => '10109.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'42',
            'vote_average'=>'42',
            'popularity'=>'10',

]);
DB::table('products')->insert([
            'name' => 'hand watch16',
            'sell_price' => '32000',
            'description' => "hand watch",
            'color' => 'white',
            'size' => 'small',
            'image' => '10135.jpg',
            'brand_id' => '1',
            'category_id' => '7',
            'total_q'=>'20',
            'vote_count'=>'52',
            'vote_average'=>'52',
            'popularity'=>'10',

]);





    }
}