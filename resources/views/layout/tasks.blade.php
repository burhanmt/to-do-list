<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

    <!-- Fontawesome 6.2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

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
            <!-- Add Task Section -->
            @include('partials.add-tasks')
        </div>
        <div class="col-md-8">
            <!-- Page content -->
            @yield('content')
        </div>
    </div>
</div>
<!-- Footer -->
@include('partials.footer')
</body>
</html>
