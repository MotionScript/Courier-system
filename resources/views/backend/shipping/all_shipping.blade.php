@extends('admin.admin_master')
@section('content')


@php
    $shipping = App\Models\Shipping::latest()->get();
@endphp




<div class="row">





    <div class="col-lg-12 col-md-9 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->

          <h4 class="card-title">Manage Shippment</h4>

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>

                <tr>
                  <th>Client Name</th>
                  <th>Tracking Number</th>
                  <th>Email</th>
                  <th>Parcel</th>
                  <th>Status</th>
                  <th>Action</th>



                </tr>
              </thead>
              <tbody>
              @foreach ($shipping as $data)
                   <tr>
                       <td>{{ $data->r_name }}</td>
                       <td><span class="badge badge-info badge-pill">{{ $data->tracking_no }}</span></td>
                       <td>{{ $data->r_email }}</td>
                       <td>{{ $data->product }}</td>
                       <td>{{ $data->status }}</td>
                       <td>
                           <a href="{{ route('view-shipping', $data->id) }}" class="btn btn-success"><i class="fa fa-eye"></i> View</a>
                           <a href="{{ route('view-shipping-label', $data->id) }}" class="btn btn-warning" ><i class="fa fa-eye"></i> Label</a>
                           <a href="{{ route('invoice-download', $data->id) }}" class="btn btn-info" ><i class="fa fa-download"></i> Receipt</a>
                        </td>
                   </tr>
              @endforeach
              </tbody>
            </table>
             {{-- {{ $categorys->links('pagination-links') }}  --}}
          </div>
        </div>
      </div>
    </div>


   </div>















































@endsection


