<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;
use Faker\Factory as Faker;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Supplier::create([
                'name' => $faker->company,
                'contact_info' => $faker->email,
            ]);
        }
    }
}
