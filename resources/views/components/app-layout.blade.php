<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

        {{-- {{ $title ? $title .' | SMK Azzainiyyah' : 'SIAKAD' }} --}}

        @isset($title)

        {{ $title }} | SMK Azzainiyyah

        @else

        SIAKAD

        @endisset

    </title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .custom-bg {
            background-color: #1A007E; 
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="flex justify-between items-center p-4 bg-white shadow-md">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('img/Logo_Azzainiyyah[1].png') }}" alt="Logo Azzainiyyah" class="h-10">
            <h1 class="text-xl font-bold">SIAKAD</h1>
        </div>
        
        <x-navbar/>

        <button class="bg-blue-900 text-white py-2 px-4 rounded hover:bg-blue-800">
            Login/Sign
        </button>
    </header>

    @isset($heading)
        
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-2 py-4 sm:px-4 lg:px-6">
          <h3 class="font-bold tracking-tight text-gray-900">{{ $heading }}</h3>
        </div>
      </header>

    @endisset
    <div class="mx-auto max-w-7xl px-2 py-4 sm:px-4 lg:px-6">
        {{ $slot }}
    </div>
    


</body>