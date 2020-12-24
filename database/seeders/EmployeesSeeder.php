<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([ //สร้างข้อมูลลง DB

            'fullname' => 'folk',
            'gender'=>'ชาย',
            'email'=>'folk@gmail.com',
            'tel'=>'88880808',
            'age'=>'22',
            'address'=>'49/141',
            'avartar'=>'ff.jpg',
            'status'=>'1'
            
        ]);
        DB::table('employees')->insert([
            'fullname'=>'saming',
            'gender'=>'หญิง',
            'email'=>'saming@gmail.com',
            'tel'=>'11121315',
            'age'=>'23',
            'address'=>'1412/141',
            'avartar'=>'sgs.jpg',
            'status'=>'1'
        ]);
        DB::table('employees')->insert([
            'fullname'=>'mama',
            'gender'=>'หญิง',
            'email'=>'mamag@gmail.com',
            'tel'=>'1221315',
            'age'=>'55',
            'address'=>'1412/141',
            'avartar'=>'aaa.jpg',
            'status'=>'1'
        ]);
        DB::table('employees')->insert([
            'fullname'=>'suwan',
            'gender'=>'หญิง',
            'email'=>'suwan@gmail.com',
            'tel'=>'1221315',
            'age'=>'55',
            'address'=>'1412/141',
            'avartar'=>'aaa.jpg',
            'status'=>'1'
        ]);
        DB::table('employees')->insert([
            'fullname'=>'toby',
            'gender'=>'ชาย',
            'email'=>'toby@gmail.com',
            'tel'=>'1221315',
            'age'=>'55',
            'address'=>'1412/141',
            'avartar'=>'aaa.jpg',
            'status'=>'1'
        ]);
    }
}
