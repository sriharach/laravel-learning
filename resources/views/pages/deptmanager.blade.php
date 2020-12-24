@extends('layouts.master')
@section('title') ข้อมูล manager @endsection
    
@section('content')

<div class="jumbotron">
    <div class="container" >
        <h1 class="display-3 head-title">ตารางข้อมูล Employee</h1>
        <div class="text-right">
            <a href="#s" type="button" class="btn btn-success mb-3">เพิ่ม</a>
        </div>
        <table class="table table-bordered table-hover display " id="table_id">
            <thead class="bg-primary text-white">
            <tr class="text-center">
                <th scope="col">ลำดับ</th>
                <th scope="col">รหัสพนักงาน</th>
                <th scope="col">แผนก</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">เพศ</th>
                <th scope="col">เริ่มงาน</th>
            </tr>
            </thead>
            <tbody>
            
                @foreach ($dep_managers as $count => $dm)
                <tr class="text-center">
                    <td>{{$count+1}}</td>
                    <td>{{$dm->emp_no }}</td>
                    <td>{{$dm->dept_no}}</td>
                    <td>{{$dm->emp_relate->first_name}}</td>
                    <td>{{$dm->emp_relate->last_name}}</td>
                    <td>{{$dm->emp_relate->gender}}</td>
                    <td>{{$dm->emp_relate->hire_date}}</td>
                    
                </tr>
                @endforeach

            </tbody>
        </table>
        {{-- {{ $emps->links() }}  --}}
        {{-- คำสั่งแบ่งหน้าในตาราง    --}}
    </div>
</div>


@endsection