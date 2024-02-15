@extends('layout')
@section('content')

<ul class="list-group list-group-flush">
    <li class="list-group-item"><h3> {{ $project->name }} </h3></li>
    <li class="list-group-item">
        <h5>leader: {{ $project->leader }}</h5>
    </li>
    <li class="list-group-item">
        @foreach ($members as $member)
        <ul class="list-group">
            <li class="list-group-item">
                <h4>{{ $member->username }}</h4>
                <p>GO left: {{ $member->GO_left }}</p>
            </li>
        </ul>
        @endforeach

    </li>
</ul>

@endsection
