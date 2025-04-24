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
    <title>Modern Dashboard</title>
</head>

<body class="bg-gray-50">
    <div class="min-h-screen flex" style="font-family: 'Poppins', sans-serif;">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg">
            <div class="p-4">
                <h2 class="text-2xl font-bold text-indigo-600">Dashboard</h2>
            </div>
            <nav class="mt-4">
                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600">
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
            <div class="mb-8">
                <h1 class="text-2xl font-semibold text-gray-800">Welcome back!</h1>
                <p class="text-gray-600">Here's what's happening today.</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-gray-600 text-sm">Total Users</h3>
                    <p class="text-2xl font-semibold text-gray-800">1,234</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-gray-600 text-sm">Revenue</h3>
                    <p class="text-2xl font-semibold text-gray-800">$5,678</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-gray-600 text-sm">Active Projects</h3>
                    <p class="text-2xl font-semibold text-gray-800">12</p>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Activity</h2>
                <div class="bg-white rounded-lg shadow-sm">
                    <div class="p-4 border-b">
                        <p class="text-gray-700">New user registration</p>
                        <span class="text-sm text-gray-500">2 minutes ago</span>
                    </div>
                    <div class="p-4 border-b">
                        <p class="text-gray-700">Project milestone completed</p>
                        <span class="text-sm text-gray-500">1 hour ago</span>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700">System update completed</p>
                        <span class="text-sm text-gray-500">3 hours ago</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>