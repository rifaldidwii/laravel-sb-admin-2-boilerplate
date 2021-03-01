@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Show User</h1>

    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title"><strong>{{ $user->name }}</strong></h5>
            <p class="card-text">{{ $user->email }}</p>
            <p class="card-text">Verified {{ $user->email_verified_at->diffForHumans() }}</p>
            @can('update', $user)
                <a href="{{ route('admin.users.edit', $user) }}"
                    class="btn btn-primary">Edit</a>
            @endcan
        </div>
    </div>

</div>
@endsection
