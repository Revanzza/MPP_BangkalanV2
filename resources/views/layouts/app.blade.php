<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPP Bangkalan</title>
    <link rel="icon" href="/icons/icon-mpp.ico" type="image/x-icon">
    @vite('resources/css/app.css')
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- ...script/icon lain jika perlu... -->
</head>
<body class="text-gray-800 bg-white">

    @include('partials.web.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('partials.web.footer')

    <!-- Feather Icons Init -->
    <script>
        feather.replace();
    </script>
</body>
</html>
