@extends('admin.admin_master')
@section('content')































    <div class="col-lg-12 col-md-9 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->

          <h4 class="card-title">Shipping Details for ( <span class="text-danger">{{ $ship->r_name }}</span> )</h4>
<hr class="bg-danger m-4">
<br>

          <form action="">
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                      <label>Client Name</label>
                      <input  class="form-control bg-dark" value="{{ $ship->r_name }}" readonly="true">
                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label>Client Email</label>
                    <input  class="form-control bg-dark" value="{{ $ship->r_email }}" readonly="true">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Client Phone</label>
                    <input  class="form-control bg-dark" value="{{ $ship->r_phone }}" readonly="true">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Client Country</label>
                    <input  class="form-control bg-dark" value="{{ $ship->r_country }}" readonly="true">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Client Address</label>
                    <input  class="form-control bg-dark" value="{{ $ship->r_address }}" readonly="true">
                </div>
            </div>
            <div class="col-md-12">
 <br>
            <h4 class="card-title">Shipping Details
                <hr class="bg-danger mr-auto">
            </h4>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Trackingn Number</label>
                    <input  class="form-control bg-dark" value="{{ $ship->tracking_no }}" readonly="true">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Reference Number</label>
                    <input  class="form-control bg-dark" value="{{ $ship->reference_no }}" readonly="true">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Parcel</label>
                    <input  class="form-control bg-dark" value="{{ $ship->product }}" readonly="true">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Shipping Method</label>
                    <input  class="form-control bg-dark" value="{{ $ship->type }}" readonly="true">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Origin</label>
                    <input  class="form-control bg-dark" value="{{ $ship->origin }}" readonly="true">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Destination</label>
                    <input  class="form-control bg-dark" value="{{ $ship->destination }}" readonly="true">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Weight</label>
                    <input  class="form-control bg-dark" value="{{ $ship->weight }}" readonly="true">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Quantity</label>
                    <input  class="form-control bg-dark" value="{{ $ship->quantity }}" readonly="true">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Status</label>
                    <input  class="form-control bg-dark" value="{{ $ship->status }}" readonly="true">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Departure Date</label>
                    <input  class="form-control bg-dark" value="{{ $ship->departure_date }}" readonly="true">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Pick Up Date</label>
                    <input  class="form-control bg-dark" value="{{ $ship->pickup_date}}" readonly="true">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Registered Date</label>
                    <input  class="form-control bg-dark" value="{{ $ship->created_at }}" readonly="true">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Coment</label>
                    <input  class="form-control bg-dark" value="{{ $ship->comment }}" readonly="true">
                </div>
            </div>

            <div class="col-md-12">
                <br>
            <h4 class="card-title">Actions
                <hr class="bg-danger mr-auto">
            </h4>
            </div>
            <div class="col-md-6 col-ms-6 col-xm-6">
                <div class="form-group">

                   <a href="{{ route('edit-ship-status', $ship->id) }}" class="btn  btn-outline-success" >Edit Sippment Status</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xm-6">
                <div class="form-group">

                  <a href="{{ route('delete-shippment', $ship->id) }}" class="btn btn-outline-danger ">Delete This Sippment</a>
                </div>
            </div>

        </div>
          </form>
        </div>
      </div>
    </div>
















@endsection
