@extends('layouts.base')
@section('page')
    <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    @if (Session::has('post_updated'))
                        <div class="alert alert-primary">
                            {{Session::get('post_updated')}}
                        </div>
                    @endif
                    <form method="post" action="{{route('form.update')}}">
                        @csrf
                        <div class="card">
                            <div class="text-center card-header">Application Form Edit</div>
                            <div class="card-body">
                                <input type="hidden" name="id" value="{{$student->id}}">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{$student->name}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="body">Description</label>
                                    <input type="text" value="{{$student->body}}" name="body" class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
