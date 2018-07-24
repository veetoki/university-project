<?php

use Illuminate\Database\Seeder;
use App\Order;
class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Order::class,50)->create()->each(function($order){
         //Order
         $arr = [];
         for ($i = 0; $i <= rand(0,2); $i++) {
           if ($i == 0) {
             $arr[rand(1,6)] = [ 
                 'quantity' => rand(1,99)
             ];
           }
           if ($i == 1) {
             $arr[rand(7,13)] = [ 
                 'quantity' => rand(1,99)
             ];
           }
           if ($i == 2) {
             $arr[rand(14,20)] = [ 
                 'quantity' => rand(1,99)
             ];
           }
         }
         $order->products()->sync($arr);
      });
    }
}
