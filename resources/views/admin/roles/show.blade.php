@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Show Role</h1>

    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title"><strong>{{ $role->title }}</strong></h5>
            @foreach($role->permissions as $permission)
                <span class="badge badge-primary">{{ $permission->name }}</span>
            @endforeach
            <p class="card-text"></p>
            @can('update', $role)
                <a href="{{ route('admin.roles.edit', $role) }}"
                    class="btn btn-primary">Edit</a>
            @endcan
            <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>

</div>
@endsection
