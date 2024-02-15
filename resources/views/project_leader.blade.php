@extends('layout')
@section('content')

<div class="navbar navbar-expand-lg">
    <div class="container-fluid fs-5">
        <p class="navbar-brand ms-5 fw-bold fs-3"> {{ $leader->username }} </p>
        <a href="/requests" class="btn btn-outline-dark d-flex me-5" role="button">All requests</a>
    </div>
</div>
<div class="container-sm mt-5 fs-4">
    <ul class="list-group list-group-flush gap-3">
        <li class="list-group-item">team:  {{ $team->name }} </li>
        <li class="list-group-item">team leader:  {{ $team->leader }} </li>

        <li class="list-group-item">
            <a href="/projects" class="btn btn-secondary ps-5 pe-5 fs-5" role="button">Projects</a>
        </li>
    </ul>
</div>

@endsection
