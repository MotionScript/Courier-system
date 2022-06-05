@extends('admin.admin_master')
@section('content')


@php

$pagecat = App\Models\PageCat::all();

@endphp



<div class="row">

    <div class="col-md-8">

    <div class="card bt border-info">
       <div class="card-header with-border">
         <h3 class="card-description">Manage Pages</h3>
       </div>
       <!-- /.box-header -->
       <div class="card-body">
           <div class="table-responsive">
             <table id="example1" class="table">
               <thead>
                   <tr>


                       <th>Name</th>
                       <th>Slug</th>
                       <th>Action</th>

                   </tr>
               </thead>
               <tbody>
                   @foreach ($pagecat as $item)
                   <tr>
                       <td>{{ $item->name }}</td>
                       <th>{{ $item->slug }}</th>
                       <td>

                        <a title="Edit Page"  class="btn btn-info  " href="{{ route('edit-page', $item->id) }}"><i class="fa fa-edit"></i>  Edit</a>
                     <a title="Delete Page" id="delete" class="btn btn-danger  " href="{{ route('delete-pagecat', $item->id) }}"><i class="fa fa-trash"></i> Delete</a>
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
          <h3 class="card-header">Add Page</h3>
        </div>


<form action="{{ route('pagecat-store') }}" method="post">
    @csrf
<div class="form-group">
    <label>Name</label>

    <input type="text" class="form-control" name="name" placeholder="page name" required>

</div>

<div class="form-group">

    <input type="submit" class="btn btn-rounded btn-info" value="Add Page">
</div>

</form>
</div>
    </div>
</div>

</div>








































@endsection
