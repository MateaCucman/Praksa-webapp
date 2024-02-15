@extends('layout')
@section('content')

<div class="navbar navbar-expand-lg">
    <div class="container-fluid fs-5">
        <p class="navbar-brand ms-5 fw-bold fs-3"> {{ $worker->username }} </p>
        <a href="/sendrequests" class="btn btn-outline-dark d-flex me-5" role="button">Send request</a>
    </div>
</div>
<div class="container-sm mt-5 fs-4">
    <ul class="list-group list-group-flush gap-3">
        <li class="list-group-item">team:  {{ $team->name }} </li>
        <li class="list-group-item">team leader:  {{ $team->leader }} </li>
        <li class="list-group-item">GO left:  {{ $worker->GO_left }} </li>

        <li class="list-group-item">
            <a href="/projects" class="btn btn-secondary ps-5 pe-5 fs-5" role="button">Projects</a>
        </li>
        <li class="list-group-item">
            <a href="#" class="btn btn-secondary ps-5 pe-5 fs-5" role="button">All requests</a>
        </li>
        </ul>
</div>
@endsection
