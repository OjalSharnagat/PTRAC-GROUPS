@extends('layout')

@section('content')
    <h1>{{ $product->name }}</h1>

    <p>{{ $product->details }}</p>

    @if ($product->image)
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="200">
    @endif

    <a href="{{ route('products.edit', $product) }}">Edit</a>

    <form method="POST" action="{{ route('products.destroy', $product) }}" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
