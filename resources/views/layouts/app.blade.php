<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>@yield('title', 'Dashboard')</title>
</head>

<body class="bg-gray-50">
    <div class="min-h-screen flex" style="font-family: 'Poppins', sans-serif;">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg">
            <div class="p-4">
                <h2 class="text-2xl font-bold text-indigo-600">Dashboard</h2>
            </div>
            <nav class="mt-4">
                <a href="{{ route('home') }}" class="block px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                    <i class="fas fa-tachometer-alt mr-2"></i>
                    Dashboard
                </a>
                <a href="{{ route('profile') }}" class="block px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                    <i class="fas fa-user mr-2"></i>
                    Profile
                </a>
                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
                    <i class="fas fa-cog mr-2"></i>
                    Settings
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            @yield('content') <!-- Tempat untuk menyisipkan konten -->
        </div>
    </div>
</body>

</html>