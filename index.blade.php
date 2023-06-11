@extends('layout')

@section('content')
    <h1>Products</h1>

    @foreach ($products as $product)
        <div>
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->details }}</p>
            @if ($product->image)
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="200">
            @endif
            <a href="{{ url('/products', $product->id) }}">View</a>
        </div>
    @endforeach
@endsection
