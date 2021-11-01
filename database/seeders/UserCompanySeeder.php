<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserCompany;

class UserCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserCompany::insert([
            [
                'user_id' => 1,
                'company_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'user_id' => 1,
                'company_id' => 2,
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'user_id' => 2,
                'company_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'user_id' => 3,
                'company_id' => 1,
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'user_id' => 3,
                'company_id' => 3,
                'created_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
