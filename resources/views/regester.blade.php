@extends('layout.master')
@section('content')
    <br><br><br><br>
    <div class="col-sm-6">
        <form action="regester" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter name" value="@if (isset($data)){{$data->name}}@endif" required><br>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" placeholder="Enter email" value="@if (isset($data)){{$data->email}}@endif" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small><br><br>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input name="address" type="text" class="form-control" placeholder="Enter address" value="@if (isset($data)){{$data->address}}@endif" required><br>
            </div>
            <button type="submit" class="btn btn-primary">Regester</button>
        </form>
    </div>
@endsection
