@extends('layout.master')
@section('content')
    <h1 class="mt-5">List of Restaurants</h1>
    <h3>Pagination will be soon</h3>
    @if (Session::get('regester'))
        <div class="alert alert-success">
            {{Session::get('regester')}}
        </div>
        @if (Session::get('notfind'))
            <div class="alert alert-warning">
                {{Session::get('notfind')}}
            </div>
        @endif
    @endif
    @if (isset($show))
        <a href="list"><button class="btn btn-primary mt-3">View All</button></a>
    @endif
    @if (isset($flash))
            <div class="alert alert-danger mt-2">
                {{$flash}}
            </div>
    @endif
    <form action="search" method="POST">
        @csrf
        <div class="input-group mb-3 mt-3">
            <input type="text" class="form-control mr-2" placeholder="Search By Name" name="search">
            <div class="input-group-append">
                <button style="display: inline-block;margin-left:12px;" class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->address}}</td>
                    <td>
                        <a href="{{"delete".$item->id}}"><button class="btn btn-sm btn-danger">Delete</button></a>
                        <a href="{{"find".$item->id}}"><button class="btn btn-sm btn-success">Update</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/regester"><button class="btn btn-primary">Add More</button></a>
@endsection
