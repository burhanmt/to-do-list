<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

    <!-- JS & Bootstrap Css -->
    @vite(['resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-sm mt-4 containerSize">
    <div class="row">
        <div class="col-12">
            <!-- Product Logo -->
            <div class="productLogo"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <!-- Navigation Menu -->
            @include('partials.nav')
        </div>
        <div class="col-md-8">
            <!-- Page content -->
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
