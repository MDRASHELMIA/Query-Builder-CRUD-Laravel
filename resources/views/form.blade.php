@extends('layouts.base')
@section('page')
    <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    @if (Session::has('post_created'))
                        <div class="alert alert-danger">
                            {{ Session::get('post_created') }}
                        </div>
                    @endif
                    <form method="post" action="{{ route('inset.item') }}">
                        @csrf
                        <div class="card">
                            <div class="text-center card-header">Application Form</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="body">Description</label>
                                    <input type="text" name="body" class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
