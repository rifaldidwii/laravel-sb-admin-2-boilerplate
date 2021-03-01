@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Show Permission</h1>

    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title"><strong>{{ $permission->name }}</strong></h5>
            @can('update', $permission)
                <a href="{{ route('admin.permissions.edit', $permission) }}"
                    class="btn btn-primary">Edit</a>
            @endcan
        </div>
    </div>

</div>
@endsection
