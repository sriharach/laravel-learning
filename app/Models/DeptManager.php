<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeptManager extends Model
{
    use HasFactory;
    
    //กรณีชื่อตารางไม่ตรงกับ Model
    protected $table = 'dept_manager';
    //กรณีที่ชื่อ primary key ไม่ใช่ id
    protected $primaryKey = 'emp_no';

    public function emp_relate(){
        return $this->hasOne('App\Models\Employee','emp_no'); //ใช้ความสัมพันธ์แบบ 1 to 1 โดยที่ไม่ต้องใช้การ join
    }

    /** manager คือ power กว่าและดึงตาราง Employee และต่อ forest key emp_no */


    public function dept_relate(){
        return $this->belongsTo('App\Models\department','dept_no'); //belongTo ใช้อ้างอิงถึง forrent key
    }
}


