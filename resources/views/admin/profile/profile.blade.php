@extends('admin.admin_master')
@section('content')


@php
    $admin = App\Models\User::where('id', Auth::user()->id)->first();
@endphp


<div class="card">
    <div class="card-header">Admin Profile</div>
    <div class="card-body">

           <form action="{{ route('update-admin-profile', $admin->id) }}" method="post">
               @csrf
            <div class="row">
               <div class="col-md-6">
                <div class="form-group">
                    <label>Admin Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $admin->name }}">
                </div></div>
<div class="col-md-6">
    <div class="form-group">
        <label>Admin Email</label>
        <input type="email" name="email" class="form-control" value="{{ $admin->email }}">
    </div>
</div>
                <div class="card-footer">
                    <input type="submit" value="Update Profile" class="btn btn-info">
                </div>

            </div>
           </form>
</div>



<div class="card-header text-center"><b>Change Password</b></div>

<div class="card-body">
    <form action="{{ route('update-admin-pwd', $admin->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Current Password</label>
                    <input type="password" name="cpass" class="form-control">
                    @error('cpass')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>ConfirmPassword</label>
                    <input type="password" name="password_confirmation" class="form-control">
                    @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-danger" value="Update Password">
            </div>
        </div>
    </form>
</div>









</div>





































































@endsection
