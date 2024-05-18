@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
      <h4>Quiz </h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('insert-quiz')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Class Title</label>
                    <input type="text" class="form-control border border-dark" name="class">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Course</label>
                    <input type="text" class="form-control border border-dark" name="course">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Question</label>
                    <textarea name="description"  rows="3" class="form-control border border-dark"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
  </div>
@endsection
