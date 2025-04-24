@extends('layouts.dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header/Cover Image -->
        <div class="h-48 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
        
        <!-- Profile Section -->
        <div class="relative px-6 py-8">
            <!-- Profile Image -->
            <div class="absolute -top-16">
                <img class="w-32 h-32 rounded-full border-4 border-white shadow-lg" 
                     src="https://ui-avatars.com/api/?name=Admin+User" 
                     alt="Admin Profile">
            </div>
            
            <!-- Profile Info -->
            <div class="ml-36">
                <h1 class="text-2xl font-bold text-gray-800">Admin User</h1>
                <p class="text-gray-600">System Administrator</p>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-3 gap-4 mt-6">
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <div class="font-bold text-xl text-blue-600">254</div>
                    <div class="text-gray-600">Projects</div>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <div class="font-bold text-xl text-blue-600">12.5k</div>
                    <div class="text-gray-600">Users</div>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <div class="font-bold text-xl text-blue-600">98%</div>
                    <div class="text-gray-600">Success Rate</div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="mt-6 space-y-4">
                <div class="flex items-center text-gray-600">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    admin@example.com
                </div>
                <div class="flex items-center text-gray-600">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    +1 234 567 890
                </div>
                <div class="flex items-center text-gray-600">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    New York, USA
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-6 flex space-x-3">
                <button class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    Edit Profile
                </button>
                <button class="flex-1 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                    Settings
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
