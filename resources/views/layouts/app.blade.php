<!DOCTYPE html>
<html lang="en">
<head>
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
