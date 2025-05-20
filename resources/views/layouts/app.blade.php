<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPP Bangkalan</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Optional: Tailwind Config (untuk kustomisasi) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0d6efd', // Contoh jika ingin menyesuaikan warna utama
                    }
                }
            }
        }
    </script>

    <!-- Optional: Gunakan Heroicons atau Feather Icons jika perlu ikon -->
    <link href="https://unpkg.com/feather-icons" rel="stylesheet">
</head>
<body class="bg-white text-gray-800">

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
