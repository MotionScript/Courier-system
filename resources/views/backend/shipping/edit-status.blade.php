@extends('admin.admin_master')
@section('content')












<div class="col-lg-12 col-md-9 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <h4 class="card-title">Edit Shipping Status</h4>
        <hr class="bg-danger m-4">

<form action="{{ route('update-ship-status', $ship->id) }}" method="POST" >
    @csrf

        <div class="form">
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" name="status" class="form-control" value="{{ $ship->status }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Origin</label>
                    <input type="text" name="origin" class="form-control" value="{{ $ship->origin }}">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Status</label>
                    <textarea name="comment" class="form-control" cols="10" rows="3">{{ $ship->comment }}</textarea>
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Update Status">
        </div>
    </div>
</form>

      </div>
    </div>
</div>


































@endsection
