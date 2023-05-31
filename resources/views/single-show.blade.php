@extends('layouts.base')
@section('page')
    <br>
    <div id="content">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-header">
                    {{ $student->name }}
                    <hr>
                </div>
                <div class="card-body">
                    {{ $student->body }}
                </div>
            </div>
        </div>
    </div>
@endsection

