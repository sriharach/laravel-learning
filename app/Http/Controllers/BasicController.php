<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class BasicController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function link(){
        return view('pages.link');
    }
    public function login(){
        return view('pages.login');
    }
    // public function employeelist(){
    //     $Employees = Employee::all(); //SELECT * FROM Employees
    //     $Employees = Employee::paginate(3);
    //     return view('pages.employeelist')->with('employees',$Employees);
    //     dd($Employees);
    // }
    public function employees(){
        $emps = DB::table('employees')->get(); // SELECT * FROM // get([ระบุในฟิวส์ฐานข้อมูล]) where คือ เงื่อนไขเลือกตาราง
        // print_r($emp);
        // dd($emp);

        // foreach($emps as $emp){ //วนข้อมูลเพื่อแสดงค่า
        //     echo $emp->fullname." ".$emp->email."<br>";
        // }
        return view('pages.employee')->with('emps',$emps); //ตั้งตัวแปร emps และ $empsรับค่ามา
    }
}


//paginate(4) คือการแบ่งหน้าตาราง