<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DeptManager;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function view_deptmanager(){
        $deptmanager = DeptManager::all();

        return view('pages.deptmanager')->with('dep_managers', $deptmanager);
        // echo $deptmanager->emp_relate->first_name;
        // dd($deptmanager);
    }
}
