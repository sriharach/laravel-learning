@extends('layouts.master')
@section('title') employee @endsection
    
@section('content')

<div class="container" >
    <h1>ตารางข้อมูล Employee</h1>
    <table class="table table-bordered table-hover display mt" id="table_id">
        <thead>
        <tr>
            <th scope="col">ลำดับ</th>
            <th scope="col">fullname</th>
            <th scope="col">email</th>
            <th scope="col">tel</th>
            <th scope="col">age</th>
        </tr>
        </thead>
        <tbody>
        
            @foreach ($emps as $emp)
            <tr>
                <td>{{$count}}</td>
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