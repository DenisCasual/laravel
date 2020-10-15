<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                "name" => "admin",
                "email" => "admin@admin.ru",
                "password" => Hash::make('123'),
                "is_admin" => "1"
            ]

        ];

        DB::table('users')->insert($admin);
    }
}
