<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert([
            [
                'name' => 'Fargo',
                'country_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'name' => 'GM',
                'country_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'name' => 'Nissan',
                'country_id' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'name' => 'Mail',
                'country_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'name' => 'VK',
                'country_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'name' => 'Lada',
                'country_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
