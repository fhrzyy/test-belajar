@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto py-4">
    <!-- Welcome Section -->
    <div class="mb-4">
        <div class="bg-blue-600 text-white p-6 rounded-lg shadow">
            <h1 class="text-3xl font-bold">Welcome, {{ Auth::user()->name }}</h1>
            <p class="text-lg">Admin Dashboard Overview</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        <div class="bg-green-500 text-white p-4 rounded-lg shadow">
            <h5>Total Users</h5>
            <h2 class="text-3xl font-bold">150</h2>
        </div>
        <div class="bg-blue-500 text-white p-4 rounded-lg shadow">
            <h5>Products</h5>
            <h2 class="text-3xl font-bold">45</h2>
        </div>
        <div class="bg-yellow-500 text-white p-4 rounded-lg shadow">
            <h5>Orders</h5>
            <h2 class="text-3xl font-bold">25</h2>
        </div>
        <div class="bg-red-500 text-white p-4 rounded-lg shadow">
            <h5>Revenue</h5>
            <h2 class="text-3xl font-bold">$5.2K</h2>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
        <div class="lg:col-span-2 bg-white p-4 rounded-lg shadow">
            <h5 class="text-lg font-bold mb-4">Recent Activities</h5>
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Activity</th>
                        <th class="px-4 py-2">User</th>
                        <th class="px-4 py-2">Time</th>
                        <th class="px-4 py-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2">New Order #123</td>
                        <td class="px-4 py-2">John Doe</td>
                        <td class="px-4 py-2">2 hours ago</td>
                        <td class="px-4 py-2"><span class="text-green-500">Completed</span></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">New User Registration</td>
                        <td class="px-4 py-2">Jane Smith</td>
                        <td class="px-4 py-2">3 hours ago</td>
                        <td class="px-4 py-2"><span class="text-blue-500">New</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h5 class="text-lg font-bold mb-4">Quick Actions</h5>
            <div class="space-y-2">
                <a href="#" class="block bg-blue-500 text-white text-center py-2 rounded">Add New User</a>
                <a href="#" class="block bg-green-500 text-white text-center py-2 rounded">Create Product</a>
                <a href="#" class="block bg-yellow-500 text-white text-center py-2 rounded">View Reports</a>
                <a href="#" class="block bg-red-500 text-white text-center py-2 rounded">Manage Orders</a>
            </div>
        </div>
    </div>
</div>
@endsection