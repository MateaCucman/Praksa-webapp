@extends('layout')
@section('content')

<div class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <p class="navbar-brand ms-5 fw-bold fs-3"> {{ $admin->username }} </p>
    </div>
</div>
<div class="container-sm fs-4">
    <ul class="list-group list-group-flush gap-2">

        <li class="list-group-item">
            <a href="/projects" class="btn btn-secondary ps-5 pe-5 fs-5" role="button">Projects</a>
        </li>
        <li class="list-group-item">
            <a href="/requests" class="btn btn-secondary ps-5 pe-5 fs-5" role="button">All requests</a>
        </li>
        @foreach ($teams as $team)
            <h4> {{ $team->name }} </h4>
                @foreach ($workers as $worker)
                    @if ($worker->team_id == $team->id && $worker->role != 'team leader')
                        <ul class="list-group">
                            <li class="list-group-item"> {{ $worker->username }} </li>
                            <li class="list-group-item"> {{ $worker->email }} </li>
                        </ul>
                    @endif
                @endforeach
        @endforeach
    </ul>
</div>

@endsection
