@extends('layout')

@section('content')
    <h1>Edit Product</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/products', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <div>
            <label for="details">Details:</label>
            <textarea id="details" name="details" required>{{ $product->details }}</textarea>
        </div>

        <div>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
        </div>

        <div>
            @if ($product->image)
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" width="200">
            @endif
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
