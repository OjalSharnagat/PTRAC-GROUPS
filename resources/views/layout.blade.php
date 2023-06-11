<!DOCTYPE html>
<html>
<head>
    <title>E-commerce Website</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('products.index') }}">Home</a></li>
            <li><a href="{{ route('products.create') }}">Create Product</a></li>
        </ul>
    </nav>

    <div>
        @yield('content')
    </div>
</body>
</html>
