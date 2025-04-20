<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased bg-gray-900 text-gray-100">
    <div class="container mx-auto py-6">
        {{ $slot }}
    </div>

    @livewireScripts
</body>
</html>
