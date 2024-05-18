@extends('layouts.admin')


@section('content')
<div class="card">
    <div class="card-header">
      <h4>Update Shopkeepers</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('update-blogs/'.$category->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Title</label>
                    <input type="text" class="form-control border border-dark" name="title" value="{{$category->title}}">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description"  rows="3" class="form-control border border-dark">{{$category->description}}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Privacy</label>
                    <input type="checkbox"  class="border border-dark" name="privacy">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">File Upload</label>
                    <input type="file" class="border border-dark" name="file">
                </div>

                <div class="col-md-12 mb-3">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
  </div>
@endsection
