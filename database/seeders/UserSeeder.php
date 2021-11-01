<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'John',
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'name' => 'Mike',
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'name' => 'Michel',
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'name' => 'Kelly',
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'name' => 'Ada',
                'created_at' => date("Y-m-d H:i:s")
            ], [
                'name' => 'Mike',
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
