@extends('template.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-3 mb-3">
            <div class="text-left">
                <h2> Show Users</h2>
            </div>
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                {{ $user->email }}
            </div>
        </div>
    </div>
@endsection