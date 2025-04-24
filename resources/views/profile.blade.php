@extends('layouts.app')

@section('title', 'Profile Page')

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
                     src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}" 
                     alt="{{ auth()->user()->name }}'s Profile">
            </div>
            
            <!-- Profile Info -->
            <div class="ml-36">
                <h1 class="text-2xl font-bold text-gray-800">{{ auth()->user()->name }}</h1>
                <p class="text-gray-600">{{ auth()->user()->role ?? 'User' }}</p>
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
        </div>
    </div>
</div>
@endsection