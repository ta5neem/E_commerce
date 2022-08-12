<?php

use Illuminate\Database\Seeder;

class OrderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            
            [
                'total_price'=> '100000',
                'date'=>'2022-08-04',
                'user_id'=>'1'
        
             ],
             [
                'total_price'=> '100000',
                'date'=>'2022-08-05',
                'user_id'=>'1'
        
             ],    [
                'total_price'=> '100000',
                'date'=>'2022-08-06',
                'user_id'=>'1'
        
             ],    [
                'total_price'=> '100000',
                'date'=>'2022-08-07',
                'user_id'=>'1'
        
             ],    [
                'total_price'=> '100000',
                'date'=>'2022-08-08',
                'user_id'=>'1'
        
             ],    [
                'total_price'=> '100000',
                'date'=>'2022-08-09',
                'user_id'=>'1'
        
             ],    [
                'total_price'=> '100000',
                'date'=>'2022-08-01',
                'user_id'=>'1'
        
             ],    [
                'total_price'=> '100000',
                'date'=>'2022-08-02',
                'user_id'=>'1'
        
             ],
         
        ]);
    }
}
