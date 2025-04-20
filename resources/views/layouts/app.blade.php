<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
