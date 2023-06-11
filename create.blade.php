@extends('layout')

@section('content')
    <h1>Create Product</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/products') }}" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="details">Details:</label>
            <textarea id="details" name="details" required></textarea>
        </div>

        <div>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
        </div>

        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
