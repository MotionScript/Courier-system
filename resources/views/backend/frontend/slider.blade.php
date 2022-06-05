@extends('admin.admin_master')
@section('content')


@php

$sliders = App\Models\Slider::all();

@endphp



<div class="row">

    <div class="col-md-8">

    <div class="card bt border-info">
       <div class="card-header with-border">
         <h3 class="card-description">Slider List</h3>
       </div>
       <!-- /.box-header -->
       <div class="card-body">
           <div class="table-responsive">
             <table id="example1" class="table">
               <thead>
                   <tr>
                       <th>Image</th>
                       <th>Title</th>

                       <th>Action</th>

                   </tr>
               </thead>
               <tbody>
                   @foreach ($sliders as $slider)
                   <tr>
                    <td><img src="{{ asset($slider->image) }}" alt="" style="width:70px; height:40px;"></td>

                       <td>
                           @if($slider->title == null)
                            <span class="badge badge-pill badge-danger">No Title</span>

                           @else
                            {{ $slider->title }}
                           @endif

                       </td>





                       <td width="30%" class="btn-group">

                           <a title="Delete Slider" id="delete" class="btn btn-danger  " href="{{ route('delete-slider', $slider->id) }}"><i class="fa fa-trash"></i></a>



                       </td>
                    </tr>
                    @endforeach
               </tbody>
             </table>
           </div>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
    </div>


{{-- ADD BRNADS --}}
<div class="col-md-4">

    <div class="card">
        <div class="table-responsive container">
        <div class="box-header with-border">
          <h3 class="card-title">Add Slider</h3>
        </div>


<form action="{{ route('slider-store') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label>Slider Title</label>

    <input type="text" class="form-control" name="title" placeholder="tile.." required>

</div>



<div class="form-group">
    <label>Slider Image</label>
    <input type="file" name="image" class="form-control" required>

</div>


<div class="form-group">

    <input type="submit" class="btn btn-rounded btn-info" value="Add Slider">
</div>

</form>
</div>

</div>

</div>








































@endsection
