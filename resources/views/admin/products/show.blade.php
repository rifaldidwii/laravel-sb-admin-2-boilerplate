@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Show Product</h1>

    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title"><strong>{{ $product->name }}</strong></h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text">{{ number_format($product->price) }}</p>
            @can('update', $product)
                <a href="{{ route('admin.products.edit', $product) }}"
                    class="btn btn-primary">Edit</a>
            @endcan
        </div>
    </div>

</div>
@endsection
