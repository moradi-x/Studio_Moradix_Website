<?php

namespace Database\Seeders;

use App\Models\PlanPrice;
use Illuminate\Database\Seeder;

class PlanPriceSeeder extends Seeder
{
    public function run(): void
    {
        PlanPrice::firstOrCreate(
            ['service_type' => 'website'],
            [
                'basic_price' => 0,
                'professional_price' => 0,
            ]
        );

        PlanPrice::firstOrCreate(
            ['service_type' => 'ecommerce'],
            [
                'basic_price' => 0,
                'professional_price' => 0,
            ]
        );
    }
}