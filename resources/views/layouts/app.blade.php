<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Management</title>

    <!-- Link to compiled CSS file using Laravel Mix -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <!-- Main content will go here -->
    @yield('content')
</div>

<!-- Link to compiled JavaScript file using Laravel Mix -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
