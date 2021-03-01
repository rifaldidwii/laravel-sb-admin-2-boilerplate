@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Role</h1>
    </div>

    <form action="{{ route('admin.roles.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="permission" class="col-sm-2 col-form-label">permission</label>
            <div class="col-sm-10">
                @foreach($permissions as $permission)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="permission-{{ $permission->id }}"
                            name="permissions[]" value="{{ $permission->id }}">
                        <label class="form-check-label"
                            for="permission-{{ $permission->id }}">{{ $permission->name }}</label>
                    </div>
                    <input type="hidden" class="@error('permissions') is-invalid @enderror">
                @endforeach
                @error('permissions')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>

</div>
@endsection
