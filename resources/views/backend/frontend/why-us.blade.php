@extends('admin.admin_master')
@section('content')
@php
    $why = App\Models\WhyUs::find(1);
@endphp

<div class="card">
    <div class="card-header">Why Us</div>
    <div class="card-body">

        <form action="{{ route('update_why_us', $why->id) }}" method="POST" enctype="multipart/form-data">
@csrf
          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title.." value="{{ $why->title }}">
                </div>

                <div class="form-group">
                  <label>Image</label>
                  <input type="file" name="image" class="form-control">
              </div>
              </div>


          <div class="col-md-6 text-right">
              <img src="{{ asset($why->image) }}" class="img-responsive" style="height:300px">
          </div>
          </div>
  <div class="card-footer">
      <input type="submit" value="Update" class="btn btn-info">
  </div>
  </form>



    </div>
</div>















































@endsection
