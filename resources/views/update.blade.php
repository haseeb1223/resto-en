@extends('layout.master')
@section('content')
    <br><br><br><br>
    <div class="col-sm-6">
        @if (Session::get('find'))
            <div class="alert alert-success">
                {{Session::get('find')}}
            </div>
        @endif
        <form action="update" method="POST">
            @csrf
            <div class="form-group">
                <input name="id" type="hidden" value="{{$data->id}}" required><br>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter name" value="{{$data->name}}" required><br>
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input name="email" type="email" class="form-control" placeholder="Enter email" value="{{$data->email}}" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small><br><br>
            </div>
            <div class="form-group">
                <label fl>Address</label>
                <input name="address" type="text" class="form-control" placeholder="Enter address" value="{{$data->address}}" required><br>
            </div>
            <button type="submit" class="btn btn-primary">Regester</button>
        </form>
    </div>
@endsection
