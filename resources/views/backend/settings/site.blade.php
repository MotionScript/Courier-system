@extends('admin.admin_master')
@section('content')


@php
    $site = App\Models\SiteSettings::find(1);
@endphp




<div class="card">
    <div class="card-header">Site Settings</div>
    <div class="card-body">
        <form action="{{ route('update-site', $site->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Site Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $site->name }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Site Phone</label>
                        <input type="number" name="phone" class="form-control" value="{{ $site->phone }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Site Email</label>
                       <input type="email" name="email" class="form-control" value="{{ $site->email }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Site Address</label>
                      <textarea name="address" class="form-control" cols="10" rows="5">{{ $site->address }}</textarea>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Site Facebook</label>
                       <input type="text" name="facebook" class="form-control" value="{{ $site->facebook }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Site Twitter</label>
                       <input type="text" name="twitter" class="form-control" value="{{ $site->twitter }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Site Instagram</label>
                       <input type="text" name="instagram" class="form-control" value="{{ $site->instagram }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Site Youtube</label>
                       <input type="text" name="youtube" class="form-control" value="{{ $site->youtube }}">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Update" class="btn btn-info">
            </div>
        </form>
        <div class="card-footer text-center">
                <b>Extral Settings</b>
        </div>
        <div class="card-body">
         <form action="{{ route('update-logo', $site->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="old_logo" value="{{$site->logo}}">
            <input type="hidden" name="old_favicon" value="{{$site->logo}}">
             <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Site Logo</label>
                       <input type="file" name="logo" class="form-control" required>
                    </div>
                    <span><img src="{{ asset($site->logo) }}" alt=""></span>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Site Favicon</label>
                       <input type="file" name="favicon" class="form-control" required>
                    </div>
                    <span><img src="{{ asset($site->favicon) }}" alt=""></span>
                </div>
            </div>
            <div class="card-footer text-center">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
        </form>
         </div>
    </div>
</div>



























































@endsection
