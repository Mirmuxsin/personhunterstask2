<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert([
            [
                'name' => 'Russia',
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'name' => 'Uzbekistan',
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'name' => 'USA',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
