@extends('admin.admin_master')
@section('content')


@php

$client = App\Models\ClientsLogo::all();

@endphp



<div class="row">

    <div class="col-md-8">

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
                       <th>Action</th>

                   </tr>
               </thead>
               <tbody>
                   @foreach ($client as $item)
                   <tr>


                       <td>

                            <img src="{{ asset($item->image) }}" style="width:100px">

                       </td>
                       <td>



                           <a title="Delete Services" id="delete" class="btn btn-danger  " href="{{ route('delete-client', $item->id) }}"><i class="fa fa-trash"></i></a>



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
<div class="col-md-4 py-5">

    <div class="card">
        <div class="table-responsive container">
        <div class="box-header with-border">
          <h3 class="card-header">Add Client Logo</h3>
        </div>


<form action="{{ route('client-store') }}" method="post"  enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label>image</label>

    <input type="file" class="form-control" name="image" placeholder="logo.." required>

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
