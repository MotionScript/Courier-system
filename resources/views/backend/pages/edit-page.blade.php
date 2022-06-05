@extends('admin.admin_master')
@section('content')

@php
    $p = App\Models\Pages::where('pagecat_id', $page->id)->first();
@endphp





<div class="row">

    <div class="col-md-12 col-12">
        <div class="card">
          <div class="box-header">
            <h4 class="card-header"><strong>Edit Page</strong></h4>
          </div>

          <div class="card-body">

          <div class="col">


            <form action="{{ route('update-page', $page->id) }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="">
                <div class="form-group">
                  <label>Page  Title</label>

                  <input type="text" name="name" value="{{ $page->name }}" class="form-control" readonly>
                </div>

                <div class="form-group">
                   <label>Page Body</label>
                  <textarea name="body"  id="summernote" cols="20" rows="10" class="form-control" required>{{ $p->body }}</textarea>

                 </div>







                 <input type="submit"  class="btn btn-primary" value="Update">
            </form>


          </div>
          </div>

      </div>

    </div>








@endsection
