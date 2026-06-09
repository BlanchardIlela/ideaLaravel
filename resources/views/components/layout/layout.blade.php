<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Idea</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-background text-foreground">
    
    <x-layout.nav />

    <main class="max-w-7xl mx-auto px-6">
        {{ $slot }}
    </main>

    {{-- Remplacez le bloc @section par un simple test de session --}}
    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

</body>
</html>