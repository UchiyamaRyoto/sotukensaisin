<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
            $info = [
                'name' => 'maru',
                'email' => 'nkc@denpa.jp',
                'email_verified_at' => $now,
                'password' => 'maru',
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('users')->insert($info);
    }
}
