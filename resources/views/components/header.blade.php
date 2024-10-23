<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">

        <div class="w-64 bg-white p-4 flex flex-col shadow-lg">
            <div class="flex items-center justify-between mb-8">
                <div class="text-lg font-semibold">Notes</div>
                <div class="text-sm text-gray-500">Rey</div>
            </div>
            <ul class="space-y-4 flex-1">
                <li class="flex items-center {{ request()->is('home') ? 'text-blue-500' : 'text-gray-700' }}">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <i class="fas fa-home mr-3"></i> Home
                    </a>
                </li>
                <li class="flex items-center {{ request()->is('notes') ? 'text-blue-500' : 'text-gray-700' }}">
                    <a href="{{ route('notes.index') }}" class="flex items-center">
                        <i class="fas fa-sticky-note mr-3"></i> Note
                    </a>
                </li>
            </ul>
            <div class="mt-8">
                <div class="text-xs text-gray-500 mb-2">PROJECTS</div>
                <ul class="space-y-4 flex-1">
                    <li class="flex items-center {{ request()->is('home') ? 'text-blue-500' : 'text-gray-700' }}">
                        <a href="{{ route('home') }}" class="flex items-center">
                            <i class="fas fa-circle mr-3 text-xs"></i> Home
                        </a>
                    </li>
                    <li class="flex items-center {{ request()->is('notes') ? 'text-blue-500' : 'text-gray-700' }}">
                        <a href="{{ route('notes.index') }}" class="flex items-center">
                            <i class="fas fa-circle mr-3 text-xs"></i> Note
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-8 flex justify-center">
                <a href="{{ route('notes.create') }}" class="bg-blue-500 text-white p-3 rounded-full hover:bg-blue-600 transition">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>

        <div class="flex-1 p-8 flex flex-col">
            <div class="flex items-center justify-between mb-8">
                <h1 class="text-3xl font-semibold">Catatan</h1>
                <div class="flex items-center space-x-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 transition">All</button>
                    <button class="bg-transparent text-gray-500 hover:text-blue-500 transition">1d</button>
                    <button class="bg-transparent text-gray-500 hover:text-blue-500 transition">7d</button>
                    <button class="bg-transparent text-gray-500 hover:text-blue-500 transition">Work</button>
                </div>
            </div>
            <div class="flex-1 flex flex-col overflow-hidden">
