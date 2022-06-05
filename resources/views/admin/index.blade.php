@extends('admin.admin_master')

@section('content')

@php
  $shipping = App\Models\Shipping::latest()->get();
  $page = App\Models\Pages::all();


@endphp

            <div class="row">
              <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{ count($shipping ) }}</h3>

                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-book-open icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Shippment</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{ count($page) }}</h3>

                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-cat icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Pages</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{ count($shipping) }}</h3>

                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                          <span class="mdi mdi-cat icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Shippment</h6>
                  </div>
                </div>
              </div>

            </div>

           <div class="row">





            <div class="col-lg-12 col-md-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->

                  <h4 class="card-title">Recent Shippment</h4>

                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>

                        <tr>
                          <th>Client Name</th>
                          <th>Tracking Number</th>
                          <th>Parcel</th>
                          <th>Country</th>
                          <th>Status</th>


                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($shipping as $data)
                           <tr>
                               <td>{{ $data->r_name }}</td>
                               <td><span class="badge badge-info badge-pill">{{ $data->tracking_no }}</span></td>
                               <td>{{ $data->product }}</td>
                               <td>{{ $data->r_country }}</td>
                               <td>{{ $data->status }}</td>
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









            <div class="row">
              <div class="col-12">
                <div class="card">

                </div>
              </div>
@endsection
