@extends('admin.admin_master')
@section('content')


@php
    $seo = App\Models\SEO::find(1);
@endphp




<div class="card">
    <div class="card-header">SEO Settings</div>
    <div class="card-body">
        <form action="{{ route('update-seo', $seo->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Meta Author</label>
                        <input type="text" name="meta_author" class="form-control" value="{{ $seo->meta_author }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Meta Keywords</label>
                        <input type="text" name="meta_keywords" class="form-control" value="{{ $seo->meta_keywords }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Meta Description</label>
                       <textarea name="meta_description" class="form-control" >{{ $seo->meta_description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Update" class="btn btn-info">
            </div>
        </form>
    </div>
</div>



























































@endsection
