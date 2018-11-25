@extends('layouts.app')

@section('content')
<div class="card-columns m-5">
    <div class="card">
        <img class="card-img-top" src="{{ $user->avatar }}">
        <div class="card-body">
            <h5 class="card-title">{{ $user->first_name }}</h5>
            <p class="card-text">
                <span class="badge badge-pill badge-primary">{{ $user->last_name
                    }}</span>
            </p>
        </div>
    </div>
</div>
@endsection
