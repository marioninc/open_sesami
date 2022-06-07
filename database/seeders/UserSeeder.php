<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin', // サイト管理者
                'email' => 'admin@ozone.email',
                'user_role_id' => 1,
                'password' => '$2y$10$NTE3cvqQ4YjEnNQmmIZfWOYnKaD4rGsdieEJfXUfmz.lJuWyNygrG',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]
        ]);
    }
}
