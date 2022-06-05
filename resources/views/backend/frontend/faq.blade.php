@extends('admin.admin_master')
@section('content')


@php

$faqs = App\Models\FAQ::all();

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


                       <th>Question</th>
                       <th>Answer</th>
                       <th>Action</th>

                   </tr>
               </thead>
               <tbody>
                   @foreach ($faqs as $item)
                   <tr>
                       <td>{{ $item->q }}</td>
                       <th>{{ Str::limit($item->a, 20) }}</th>
                       <td>


                     <a title="Delete FAQ" id="delete" class="btn btn-danger  " href="{{ route('delete-faq', $item->id) }}"><i class="fa fa-trash"></i> Delete</a>
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
          <h3 class="card-header">Add FAQ</h3>
        </div>


<form action="{{ route('faq-store') }}" method="post">
    @csrf
<div class="form-group">
    <label>Question</label>

    <input type="text" class="form-control" name="q" placeholder="question.." required>

</div>

<div class="form-group">
    <label>Answer</label>

    <input type="text" class="form-control" name="a" placeholder="answer.." required>

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
