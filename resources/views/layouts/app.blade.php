<!DOCTYPE html>
<html lang="en" data-theme="abyss">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Student Task Manager')</title>
    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body class="min-h-screen flex flex-col bg-base-100 text-base-content">

{{-- Header --}}
@include('layouts.includes.header')

<div class="flex flex-1">
    {{-- Sidebar --}}
    @include('layouts.includes.sidebar')

    {{-- Main Content --}}
    <main class="flex-1 p-6">
        @if (session('success'))
            <div class="alert alert-success mb-4 shadow-lg">
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @yield('content')
    </main>
</div>

{{-- Footer --}}
@include('layouts.includes.footer')

@stack('scripts')
</body>
</html>
