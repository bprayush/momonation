@extends('admin.layouts.app')

@section('content')


<div class="col-md-2">
    <div class="panel panel-success">
        <div class="panel-heading">Registered users</div>
        <div class="panel-body">
            <div class="text-center">
                {{ $registered }}
            </div>
        </div>
    </div>
</div>

<div class="col-md-2">
    <div class="panel panel-danger">
        <div class="panel-heading">Need approval</div>
        <div class="panel-body">
            <div class="text-center">
                {{ $needApprove }}
            </div>
        </div>
    </div>
</div>

@endsection
