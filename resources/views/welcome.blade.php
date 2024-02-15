@extends('layout')
@section('content')

<div class="container pt-3 ms-5">
    <div class="border border-black p-4 rounded mt-5">
        <div class="m-4">
            <label for="username" class="form-label">Username: </label>
            <input type="text" class="form-control" id="username" placeholder="your username">
        </div>
        <div class="m-4">
            <label for="email" class="form-label">Email: </label>
            <input type="email" class="form-control" id="email" placeholder="your email">
        </div>
        <div class="m-4">
            <label for="password" class="form-label">Password: </label>
            <input type="password" class="form-control" id="password" placeholder="your password">
        </div>
        <input class="btn btn-secondary m-3" type="submit" value="Login">
    </div>
</div>
@endsection
