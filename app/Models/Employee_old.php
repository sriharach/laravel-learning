<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model //ตรงกับในเบส
{
    use HasFactory;

    //กรณีชื่อตารางไม่ตรงกับ Model
    // protected $table = 'learnlaravel'; 
        
    //กรณีที่ชื่อ primary key ไม่ใช่ id
    //protected $primaryKey = 'emp_id'

    //กรณีที่ไม่มีฟิลด์ created_at และ updated_at
    //protected $timestamps = false;

    //การเปลี่ยนชื่อพิมพ์ create_at และ updated_at
    // const CREATED_AT = 'creation_ai';
}
