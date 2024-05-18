@extends('layouts.admin')



@section('content')
   <div class="card">
    <div class="card-header">
        <h4>Quiz Page</h4>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-striped table-fixed table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th >Name</th>
                    <th >Description</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                <tr>
                    <td >{{$item->id}}</td>
                    <td >{{$item->class}}</td>
                    <td >{{$item->course}}</td>
                    <td >{{$item->description}}</td>
                   
                    <td>
                        <a class="btn btn-primary" href="{{url('edit-quiz/'.$item->id)}}">Edit</a>
                        <a  class="btn btn-danger" href="{{url('delete-quiz/'.$item->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   </div>
@endsection
