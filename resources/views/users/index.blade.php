@extends('layouts.app')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<a class="btn btn-link text-left" href="{{ route('user.create') }}">Create New
    User</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Avatar</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td><img src="{{ $user->avatar }}" alt=""></td>
            <td><a href="{{ route('user.show', $user->id) }}">See</a></td>
            <td><a href="{{ route('user.destroy', $user->id) }}">Destroy</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="text-center">
    {{ $users->links() }}
</div>

@endsection
