@extends('layouts.master')
@section('title') employee @endsection
    
@section('content')

<div class="container" >
    <h1>ตารางข้อมูล Employee</h1>
    <div class="text-right">
        <a href="#s" type="button" class="btn btn-success mb-3">เพิ่ม</a>
    </div>
    <table class="table table-bordered table-hover display " id="table_id">
        <thead class="bg-primary text-white">
        <tr class="text-center">
            <th scope="col">ลำดับ</th>
            <th scope="col">fullname</th>
            <th scope="col">email</th>
            <th scope="col">tel</th>
            <th scope="col">age</th>
        </tr>
        </thead>
        <tbody>
        
            @foreach ($emps as $count => $emp)
            <tr class="text-center">
                <td>{{$count+1}}</td>
                <td>{{$emp->fullname}}</td>
                <td>{{$emp->email}}</td>
                <td>{{$emp->tel}}</td>
                <td>{{$emp->age}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{-- {{ $emps->links() }}  --}}
    {{-- คำสั่งแบ่งหน้าในตาราง    --}}
</div>


@endsection