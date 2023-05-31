@extends('layouts.base')
@section('page')
    <div class="container">
        <br>
        @if (Session::has('deleted'))
            <div class="alert alert-danger">
                {{Session::get('deleted')}}
            </div>
        @endif
        <br>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($student as $student)
                <tr>
                    <th>{{$student->id}}</th>
                    <th>{{$student->name}}</th>
                    <th>{{$student->body}}</th>
                    <th>
                        <a class="btn btn-success" href="{{route("show",['id'=>$student->id])}}">View</a>
                        <a href="{{route("delete.item",['id'=>$student->id])}}" class="btn btn-danger">Delete</a>
                        <a class="btn btn-primary" href="{{route("edit.page",['id'=>$student->id])}}">Edit</a>
                    </th>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
