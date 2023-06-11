@extends('layout')

@section('content')
    <h1>{{ $product->name }}</h1>

    <p>{{ $product->details }}</p>

    @if ($product->image)
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="200">
    @endif

    <a href="{{ url('/products', $product->id) }}/edit">Edit</a>

    <form method="POST" action="{{ url('/products', $product->id) }}" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
