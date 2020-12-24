<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\EmployeesSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ //เรียกใช้ class เพื่อสร้างไฟล์ DatabaseSeeder
            EmployeesSeeder::class
        ]); 
    }
}
