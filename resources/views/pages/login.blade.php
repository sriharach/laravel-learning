@extends('layouts.master')
@section('title') login page @endsection
    
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header bg-success"><h3 class="text-center my-4">Login</h3></div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="small mb-1" >อีเมล์</label>
                                <input class="form-control py-4" name="username" type="text" placeholder="กรอกอีเมล" required />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">รหัสผ่าน</label>
                                <input class="form-control py-4" name="password" type="password" placeholder="กรอกรหัสผ่าน" required />
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button class="btn btn-success" type="submit" name="login_user"><i class="fas fa-sign-in-alt"></i> &nbsp; เข้าสู่ระบบ</button>
                            </div>
                        </form>
                    </div>
                <div class="card-footer text-center">
                    <div class="small"><a href="#">Need an account? Sign up!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection