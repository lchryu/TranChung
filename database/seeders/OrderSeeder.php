<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
use App\Models\Supplier;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $products = Product::pluck('productid')->toArray();
        $suppliers = Supplier::pluck('supplierid')->toArray();

        for ($i = 0; $i < 10; $i++) {
            $orderDate = $faker->dateTimeBetween('-1 year', 'now');

            Order::create([
                'productid' => $faker->randomElement($products),
                'quantity' => $faker->numberBetween(1, 10),
                'supplierid' => $faker->randomElement($suppliers),
                'order_date' => $orderDate->format('Y-m-d'),
            ]);
        }
    }
}
