<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Main Layout</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
{{-- @extends('layouts.main')
@section('content') --}}
<body>
    <div class="font-sans text-gray-900 antialiased">
        <!-- Header Section -->
        <x-slot name="header">
            <!-- Add your header content here -->
            <!-- For example, a logo or navigation bar -->
        </x-slot>

        <!-- Content Section -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{-- Task: change the layout from layouts/app.blade.php --}}
                        {{-- to layouts/main.blade.php --}}
                        Please change layout.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
