@extends('admin.admin_master')
@section('content')


@php

$testy = App\Models\Testimonial::all();

@endphp



<div class="row">

    <div class="col-md-12">

    <div class="card bt border-info">
       <div class="card-header with-border">
         <h3 class="card-description">Manage Services</h3>
       </div>
       <!-- /.box-header -->
       <div class="card-body">
           <div class="table-responsive">
             <table id="example1" class="table">
               <thead>
                   <tr>
                       <th>Image</th>
                       <th>Name</th>
                       <th>Work</th>
                       <th>Body</th>
                       <th>Action</th>

                   </tr>
               </thead>
               <tbody>
                   @foreach ($testy as $item)
                   <tr>
                    <td><img src="{{ asset($item->image) }}" alt=""></td>

                       <td>
                     {{ $item->name }}
                         </td>

                         <td>
                            {{ $item->work }}
                                </td>

                      <td>{{ Str::limit($item->body, 50) }}</td>



                       <td >

                           <a title="Delete Services" id="delete" class="btn btn-danger  " href="{{ route('delete-testy', $item->id) }}"><i class="fa fa-trash"></i></a>



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
<div class="col-md-12 py-5">

    <div class="card">
        <div class="table-responsive container">
        <div class="box-header with-border">
          <h3 class="card-header">Add Testimonial</h3>
        </div>


<form action="{{ route('testy-store') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label>Image</label>

    <input type="file" class="form-control" name="image" placeholder="tile.." required>

</div>



<div class="form-group">
    <label> Name</label>
    <input type="text" name="name" class="form-control" required>

</div>

<div class="form-group">
    <label> Work</label>
    <input type="text" name="work" class="form-control" required>

</div>

<div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control" cols="80" rows="5" placeholder="Body" required></textarea>

</div>


<div class="form-group">

    <input type="submit" class="btn btn-rounded btn-info" value="Save">
</div>

</form>
</div>
    </div>
</div>

</div>








































@endsection
