<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Available_vaccine;
use App\Models\User;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        # Array of Order data to add
        $orders = [
            [3, 1, 2, 'Gotham'],
            [3, 2, 3, 'Gotham']
        ];
        $count = count($orders);

        foreach ($orders as $orderData) {
            $order = new Order();

            $order->created_at = Carbon::now()->subDays($count)->toDateTimeString();
            $order->updated_at = Carbon::now()->subDays($count)->toDateTimeString();

            $order->user_id = $orderData[0];
            $vaccine_id=$orderData[1];
            $order->vaccine_id = $vaccine_id;

            $order->quantity = $orderData[2];
            
            //find price of given vaccine_id
            $vaccine = Available_vaccine::where('id', $vaccine_id)->first();
            $vaccine_price = $vaccine->price;
            $order->amount_owed=$vaccine_price * $orderData[2];

            $order->address=$orderData[3];

            $order->save();
        }
    }
}
