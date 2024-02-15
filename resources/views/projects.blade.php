@extends('layout')
@section('content')

<div class="navbar navbar-expand-lg">
    <div class="container-fluid fs-5">
        <h2 class="ms-5 fw-bold fs-3"> Projects: </h2>
    </div>
</div>

<div class="container-sm ms-5 fs-5">
    <ul class="list-group list-group-flush gap-4">
        @foreach ($projects as $project)
            <li class="list-group-item">
                <h3>{{$project->name}}</h3>
                <p>{{$project->about}}</p>
                <a href="/members" class="btn btn-secondary ps-5 pe-5 fs-6" role="button">Members</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
