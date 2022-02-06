<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class app_set_up extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'てすとたろう',
            'email' => 'test@test.co.jp',
            'password' => '$2y$10$KTtt5eXAZkLJn/KpbcVVDuOY9F65XY4yU.qstTY.IszDYUwHDKRIC',
        ]);
    }
}
