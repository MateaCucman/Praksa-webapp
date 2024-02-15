@extends('layout')
@section('content')

<ul class="list-group list-group-flush">
    <li class="list-group-item"><h3> {{ $team->name }} </h3></li>
    <li class="list-group-item">
        <h5>leader: {{ $team->leader }}</h5>
    </li>
    <li class="list-group-item">
        @foreach ($members as $member)
        <ul class="list-group">
            @if ($member->role != 'team leader')
                <li class="list-group-item">
                        <h4>{{ $member->username }} -- {{ $member->role }} </h4>
                    @if ($member->GO_left != null)
                        <p>GO left: {{ $member->GO_left }}</p>
                    @endif
                </li>
            @endif
        </ul>
        @endforeach

    </li>
</ul>

@endsection
