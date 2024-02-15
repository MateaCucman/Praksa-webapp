@extends('layout')
@section('content')

@foreach ($requests as $request)
    @foreach ($workers as $worker)
        @if ($request->worker_id == $worker->id)
            <h4> {{ $worker->username  }} </h4>
            <p> GO left: {{ $worker->GO_left }} </p>
            <ul class="list-group">
                <li class="list-group-item"> {{ $request->start }} - {{ $request->end }} </li>
                <li class="list-group-item"> {{ $request->reason }} </li>
            </ul>
        @endif
    @endforeach

    @foreach ($workers as $worker)
        @if ($worker->team_id == $team->id && $worker->role != 'team leader')

        @endif
    @endforeach
@endforeach

@endsection
